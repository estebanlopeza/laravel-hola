@component('mail::message')
# Nuevo correo de 

**Nombre:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Mensaje:**

{{ $data['message'] }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
