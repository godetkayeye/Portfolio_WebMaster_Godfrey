"use client";

import { useEffect } from "react";

export function EducationClient() {
  useEffect(() => {
    const timelineItems = document.querySelectorAll<HTMLElement>(".timeline-item");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) entry.target.classList.add("show");
        });
      },
      { threshold: 0.2 }
    );

    timelineItems.forEach((item) => observer.observe(item));

    const menuToggle = document.querySelector<HTMLElement>(".menu-toggle");
    const navMenu = document.querySelector<HTMLElement>("nav ul");
    const onToggle = () => navMenu?.classList.toggle("show");
    menuToggle?.addEventListener("click", onToggle);

    return () => {
      observer.disconnect();
      menuToggle?.removeEventListener("click", onToggle);
    };
  }, []);

  return null;
}

