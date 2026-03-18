"use client";

import { useEffect } from "react";

export function CvClient() {
  useEffect(() => {
    const timelineItems = document.querySelectorAll<HTMLElement>(".timeline-item");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("opacity-100", "translate-x-0");
            entry.target.classList.remove("opacity-0", "-translate-x-4");
          }
        });
      },
      { threshold: 0.1 }
    );

    timelineItems.forEach((item) => {
      item.classList.add("opacity-0", "-translate-x-4", "transition", "duration-500", "ease-out");
      observer.observe(item);
    });

    return () => observer.disconnect();
  }, []);

  return null;
}

