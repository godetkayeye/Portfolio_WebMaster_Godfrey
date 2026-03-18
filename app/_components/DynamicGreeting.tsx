'use client';

import { useEffect, useState } from 'react';

export function DynamicGreeting() {
  const [greeting, setGreeting] = useState('Bonjour');

  useEffect(() => {
    const currentHour = new Date().getHours();
    // Bonsoir de 18h à 23h59 et de 0h à 5h59 (nuit)
    // Bonjour de 6h à 17h59
    setGreeting(currentHour >= 18 || currentHour < 6 ? 'Bonsoir' : 'Bonjour');
  }, []);

  return <>{greeting}</>;
}
