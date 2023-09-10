<?php

class ErrorCode
{
  public const ADMIN_ACCESS_ERROR = 1;
  public const INVALID_CREDENTIALS = 2;
  public const LOGIN_FIELDS_REQUIRED = 3;

  public static function getErrorMessage(int $errorCode): string
  {
    switch ($errorCode) {
      case self::ADMIN_ACCESS_ERROR:
        $result = "Un intru !!! Vous n'avez pas l'accès à l'administration, ou connectez vous !";
        break;
      case self::INVALID_CREDENTIALS:
        $result = "<p class='error-message-custom'>Les identifiants fournis n'ont pas permis de vous identifier</p>";
        break;
      case self::LOGIN_FIELDS_REQUIRED:
        $result = "<p class='error-message-custom'>Tous les champs du formulaire sont obligatoires</p>";
        break;
      default:
        $result = "<p class='error-message-custom'>Une erreur est survenue</p>";
    }

    return $result;
  }
}