"use client";

import { useEffect } from "react";

declare global {
  interface Window {
    Swal?: any;
  }
}

export function HomeClient() {
  useEffect(() => {
    const menuToggle = document.querySelector<HTMLButtonElement>(".menu-toggle");
    const mobileMenu = document.querySelector<HTMLElement>("header div.md\\:hidden");

    const onToggle = () => {
      menuToggle?.classList.toggle("active");
      mobileMenu?.classList.toggle("hidden");
    };

    menuToggle?.addEventListener("click", onToggle);

    const anchors = Array.from(document.querySelectorAll<HTMLAnchorElement>('a[href^="#"]'));
    const onAnchorClick = (e: MouseEvent) => {
      const a = e.currentTarget as HTMLAnchorElement;
      const targetId = a.getAttribute("href");
      if (!targetId) return;

      const targetElement = document.querySelector<HTMLElement>(targetId);
      if (!targetElement) return;

      e.preventDefault();
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: "smooth",
      });

      if (mobileMenu && !mobileMenu.classList.contains("hidden")) {
        menuToggle?.classList.remove("active");
        mobileMenu.classList.add("hidden");
      }
    };

    anchors.forEach((a) => a.addEventListener("click", onAnchorClick));

    const header = document.querySelector<HTMLElement>("header");
    const onScroll = () => {
      if (!header) return;
      if (window.scrollY > 10) header.classList.add("shadow-lg");
      else header.classList.remove("shadow-lg");
    };
    window.addEventListener("scroll", onScroll);

    const form = document.getElementById("contactForm") as HTMLFormElement | null;
    const sendBtn = document.getElementById("sendBtn") as HTMLButtonElement | null;

    const onSubmit = async (e: Event) => {
      e.preventDefault();

      if (!form || !sendBtn) return;

      sendBtn.disabled = true;
      sendBtn.innerHTML = "Envoi en cours...";

      try {
        const body = {
          name: (document.getElementById("name") as HTMLInputElement | null)?.value ?? "",
          email: (document.getElementById("email") as HTMLInputElement | null)?.value ?? "",
          subject: (document.getElementById("subject") as HTMLInputElement | null)?.value ?? "",
          message: (document.getElementById("message") as HTMLTextAreaElement | null)?.value ?? "",
        };

        const response = await fetch("/api/contact", {
          method: "POST",
          headers: { "Content-Type": "application/json", Accept: "application/json" },
          body: JSON.stringify(body),
        });

        const result = await response.json();
        if (result?.success) {
          window.Swal?.fire?.({
            icon: "success",
            title: "Succès!",
            text: "Votre message a été envoyé avec succès!",
            confirmButtonColor: "#3b82f6",
            confirmButtonText: "Fermer",
          });
          form.reset();
        } else {
          window.Swal?.fire?.({
            icon: "error",
            title: "Erreur",
            text: "Erreur: " + (result?.message || "Une erreur s'est produite"),
            confirmButtonColor: "#3b82f6",
            confirmButtonText: "Fermer",
          });
        }
      } catch (error) {
        window.Swal?.fire?.({
          icon: "error",
          title: "Erreur réseau",
          text: "Erreur réseau. Veuillez vérifier votre connexion.",
          confirmButtonColor: "#3b82f6",
          confirmButtonText: "Fermer",
        });
      } finally {
        sendBtn.disabled = false;
        sendBtn.innerHTML = "Envoyer le message";
      }
    };

    form?.addEventListener("submit", onSubmit);

    return () => {
      menuToggle?.removeEventListener("click", onToggle);
      anchors.forEach((a) => a.removeEventListener("click", onAnchorClick));
      window.removeEventListener("scroll", onScroll);
      form?.removeEventListener("submit", onSubmit);
    };
  }, []);

  return null;
}

