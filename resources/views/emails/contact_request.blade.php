@component('mail::message')
# Nouvelle Demande de Contact

**Nom :** {{ $contact->prenom }} {{ $contact->nom }}  
**Email :** {{ $contact->email }}  
**Téléphone :** {{ $contact->telephone ?? 'Non renseigné' }}  
**Offre choisie :** {{ $contact->offre }}

**Message :**  
{{ $contact->message ?? 'Aucun message fourni.' }}

@endcomponent
