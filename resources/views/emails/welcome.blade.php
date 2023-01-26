@component('mail::message')
# Welcome to verification e-mail

Tienes que verificar el correo electrónico para funcionar con el servicio CRUD.
Por favor, accede al servicio con el botón de abajo

@component('mail::button', ['url' => '/'])
Validate User
@endcomponent
Gracias por su tiempo
@endcomponent
