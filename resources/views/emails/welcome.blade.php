<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue Email</title>
</head>
<body>
    <h1> {{$data['name']}} ,ous pouvez désormais accéder à l'application.^:Apptivo! </h1>
    <h5> avec ces  informations</h5>
    <h5> Email : {{$data['email']}}</h5>
    <h5> Password : {{$data['password']}}</h5>


    <p>merci d'avoir réinitialisé votre mot de passe le plus vite possible .</p>
</body>
</html>