@component('mail::message')
# 📘 Nouvelle demande de brief – École **{{ $brief->ecole }}**

👤 **Responsable** : {{ $brief->responsable }}  
📞 **Téléphone** : {{ $brief->telephone }}  
✉️ **Email** : {{ $brief->email }}

---

### 🎯 Objectif
{{ $brief->objectif }}

### 📌 Historique
{{ $brief->historique ?? 'Non renseigné' }}

### 📝 Besoins
{{ $brief->besoins }}

### ⏳ Délai souhaité
{{ $brief->delai ?? 'Non précisé' }}

@component('mail::subcopy')
"Un objectif sans plan n’est qu’un souhait." ✨
@endcomponent
@endcomponent

