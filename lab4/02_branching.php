<?php
// Input via query string: e.g., ?role=admin&day=Sat&code=404
$role = $_GET['role'] ?? 'guest';
$day  = $_GET['day']  ?? 'Mon';
$code = (int)($_GET['code'] ?? 200);
$lang = $_GET['lang'] ?? 'en';

// A) Role greeting with if/elseif/else
if ($role === 'admin') {
  if($lang != 'fr') {
  echo "Welcome, admin.\n";
  } else {
  echo nl2br("Bienvenue, administrateur. \n");
  }
} elseif ($role === 'editor') {
  if($lang != 'fr') {
  echo "Welcome, editor.\n";
  } else {
  echo nl2br("Bienvenue, editeur. \n");
  }
} else {
  if($lang != 'fr') {
  echo "Welcome, user.\n";
  } else {
  echo nl2br("Bienvenue, utilisateur/ultilisatrice. \n");
  }
}

// B) Working day vs weekend with switch
switch ($day) {
  case 'Sat':
  case 'Sun':
    if ($lang != 'fr') {
    echo "Enjoy your weekend!\n";
    } else {
    echo nl2br("Passez un bon week-end!\n");
    }
    break;
  default:
    if($lang != 'fr') {
    echo "Back to work.\n";
    } else {
    echo nl2br("C'est temps pour travailler!\n");
    }
}

// C) Status code message (use match if PHP 8+)
if (function_exists('match') && ($lang != 'fr')) {
  $message = match ($code) {
    200, 201 => 'OKish',
    400 => 'Bad Request',
    401, 403 => 'Not Authorized',
    404 => 'Not Found',
    default => 'Unknown',
  };
  echo "$code => $message\n";
} else if ($lang != 'fr') {
  // Fallback using switch
  switch ($code) {
    case 200: case 201: echo "OKish\n"; break;
    case 400: echo "Bad Request\n"; break;
    case 401: case 403: echo "Not Authorized\n"; break;
    case 404: echo "Not Found\n"; break;
    default: echo "Unknown\n";
  }
} else {
if (function_exists('match')) {
  $message = match ($code) {
    200, 201 => 'D\'Accord',
    400 => 'Demande Incorrect',
    401, 403 => 'Non Autorise',
    404 => 'Not Trouve',
    default => 'Inconnu',
  };
  echo "$code => $message\n";
} else {
  // Fallback using switch
  switch ($code) {
    case 200: case 201: echo nl2br("D'Accord\n"); break;
    case 400: echo nl2br("Demande Incorrect\n"); break;
    case 401: case 403: echo nl2br("Non Autorise\n"); break;
    case 404: echo nl2br("Non Trouve\n"); break;
    default: echo nl2br("Inconnu\n");
  }
}
}