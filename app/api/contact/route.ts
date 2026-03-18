import { NextResponse } from "next/server";

type ContactPayload = {
  name: string;
  email: string;
  subject: string;
  message: string;
};

export async function POST(req: Request) {
  const accessKey = process.env.WEB3FORMS_ACCESS_KEY;
  if (!accessKey) {
    return NextResponse.json(
      { success: false, message: "Configuration manquante: WEB3FORMS_ACCESS_KEY" },
      { status: 500 }
    );
  }

  let payload: ContactPayload;
  try {
    payload = (await req.json()) as ContactPayload;
  } catch {
    return NextResponse.json({ success: false, message: "JSON invalide" }, { status: 400 });
  }

  const { name, email, subject, message } = payload ?? ({} as ContactPayload);
  if (!name || !email || !subject || !message) {
    return NextResponse.json({ success: false, message: "Champs requis manquants" }, { status: 400 });
  }

  try {
    const res = await fetch("https://api.web3forms.com/submit", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
      body: JSON.stringify({
        access_key: accessKey,
        name,
        email,
        subject,
        message,
      }),
    });

    const data = await res.json().catch(() => null);
    if (!res.ok) {
      return NextResponse.json(
        { success: false, message: data?.message || "Erreur Web3Forms" },
        { status: 502 }
      );
    }

    return NextResponse.json(data ?? { success: true });
  } catch {
    return NextResponse.json({ success: false, message: "Erreur réseau" }, { status: 502 });
  }
}

