# Portfolio (Next.js)

Ce dépôt contient la version **Next.js** de ton portfolio (prête pour **Vercel**).

## Routes

- `/` : page d’accueil
- `/cv` : CV
- `/education` : parcours / éducation

## Prérequis

- Node.js 18+ (recommandé: 20+)

## Installation & lancement (local)

```bash
npm install
cp .env.example .env.local
# puis remplacer WEB3FORMS_ACCESS_KEY dans .env.local
npm run dev
```

## Variable d’environnement (formulaire de contact)

- **`WEB3FORMS_ACCESS_KEY`**: clé Web3Forms utilisée par l’endpoint Next.js `POST /api/contact`.

## Déploiement gratuit sur Vercel

- Pousser ce repo sur GitHub
- Dans Vercel: **New Project** → Import GitHub repo
- Dans **Settings → Environment Variables**, ajouter:
  - `WEB3FORMS_ACCESS_KEY` = ta clé Web3Forms
- Déployer

## Notes

- Les assets statiques sont servis depuis `public/`:
  - `public/assets/*`
  - `public/img/*`

