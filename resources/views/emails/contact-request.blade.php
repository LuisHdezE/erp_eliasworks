<x-mail::message>
# Nueva Solicitud de Contacto

Has recibido una nueva solicitud de contacto a través de EliasWorks.

**Detalles del prospecto:**
- **Nombre:** {{ $contactRequest->name }}
- **Email:** [{{ $contactRequest->email }}](mailto:{{ $contactRequest->email }})
@if($contactRequest->company)
- **Empresa:** {{ $contactRequest->company }}
@endif

**Mensaje:**
<x-mail::panel>
{{ $contactRequest->message }}
</x-mail::panel>

<x-mail::button :url="config('app.url') . '/admin/contact-requests'">
Ver en el Panel de Administración
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
