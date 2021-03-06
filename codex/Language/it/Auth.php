<?php

return [
    // Exceptions
    'invalidModel'              => 'The {0} model must be loaded prior to use.',
    'userNotFound'              => 'Unable to locate a user with ID = {0, number}.',
    'noUserEntity'              => 'User Entity must be provided for password validation.',
    'tooManyCredentials'        => 'You may only validate against 1 credential other than a password.',
    'invalidFields'             => 'The "{0}" field cannot be used to validate credentials.',
    'unsetPasswordLength'       => 'You must set the `minimumPasswordLength` setting in the Auth config file.',
    'unknownError'              => 'Sorry, we encountered an issue sending the email to you. Please try again later.',
    'notLoggedIn'               => 'You must be logged in to access that page.',
    'notEnoughPrivilege'        => 'You do not have sufficient permissions to access that page.',

    // Registration
    'registerDisabled'          => 'Sorry, new user accounts are not allowed at this time.',
    'registerSuccess'           => 'Welcome aboard! Please login with your new credentials.',
    'registerCLI'               => 'New user created: {0}, #{1}',

    // Activation
    'activationNoUser'          => 'Unable to locate a user with that activation code.',
    'activationSubject'         => 'Activate your account',
    'activationSuccess'         => 'Please confirm your account by clicking the activation link in the email we have sent.',
    'notActivated'              => 'This user account is not yet activated.',
    'errorSendingActivation'    => 'Failed to send activation message to: {0}',

    // Login
    'badAttempt'                => 'Unable to log you in. Please check your credentials.',
    'loginSuccess'              => 'Welcome back!',

    // Forgotten Passwords
    'forgotNoUser'              => 'Unable to locate a user with that email.',
    'forgotSubject'             => 'Password Reset Instructions',
    'resetSuccess'              => 'Your password has been successfully changed. Please login with the new password.',
    'forgotEmailSent'           => 'A security token has been emailed to you. Enter it in the box below to continue.',

    // Passwords
    'errorPasswordLength'       => 'Passwords must be at least {0, number} characters long.',
    'suggestPasswordLength'     => 'Pass phrases - up to 255 characters long - make more secure passwords that are easy to remember.',
    'errorPasswordCommon'       => 'Password must not be a common password.',
    'suggestPasswordCommon'     => 'The password was checked against over 65k commonly used passwords or passwords that have been leaked through hacks.',
    'errorPasswordPersonal'     => 'Passwords cannot contain re-hashed personal information.',
    'suggestPasswordPersonal'   => 'Variations on your email address or username should not be used for passwords.',
    'errorPasswordTooSimilar'    => 'Password is too similar to the username.',
    'suggestPasswordTooSimilar'  => 'Do not use parts of your username in your password.',
    'errorPasswordPwned'        => 'The password {0} has been exposed due to a data breach and has been seen {1, number} times in {2} of compromised passwords.',
    'suggestPasswordPwned'      => '{0} should never be used as a password. If you are using it anywhere change it immediately.',
    'errorPasswordEmpty'        => 'Password è obbligatoria.',
    'passwordChangeSuccess'     => 'Password cambiata con successo',
    'userDoesNotExist'          => 'Password was not changed. User does not exist',
    'resetTokenExpired'         => 'Sorry. Your reset token has expired.',

    // Groups
    'groupNotFound'             => 'Impossibile individuare gruppo: {0}.',

    // Permissions
    'permissionNotFound'        => 'Impossibile individuare permessi: {0}',

    // Banned
    'userIsBanned'              => 'Utente bannato. Contatta l\'amministratore',

    // Too many requests
    'tooManyRequests'           => 'Troppe richieste. Attendi {0, number} secondi.',

    // Login views
    'home'                      => 'Home',
    'current'                   => 'Corrente',
    'forgotPassword'            => 'Password dimenticata?',
    'enterEmailForInstructions' => 'Nessun problema! Inserisci la tua email qui sotto e ti invieremo le istruzioni per reimpostare la password.',
    'email'                     => 'Email',
    'emailAddress'              => 'Indirizzo Email',
    'sendInstructions'          => 'Invia Istruzioni',
    'loginTitle'                => 'Login',
    'loginAction'               => 'Login',
    'rememberMe'                => 'Ricordami',
    'needAnAccount'             => 'Non hai un\'account?',
    'forgotYourPassword'        => 'Password dimenticata?',
    'password'                  => 'Password',
    'repeatPassword'            => 'Ripeti Password',
    'emailOrUsername'           => 'Email o username',
    'username'                  => 'Username',
    'register'                  => 'Registra',
    'signIn'                    => 'Entra',
    'alreadyRegistered'         => 'Già registrato?',
    'weNeverShare'              => 'Non condivideremo mai la tua email con nessun altro.',
    'resetYourPassword'         => 'Resetta la tua Password',
    'enterCodeEmailPassword'    => 'Inserisci il codice che hai ricevuto via e-mail, il tuo indirizzo e-mail e la tua nuova password.',
    'token'                     => 'Token',
    'newPassword'               => 'Nuova Password',
    'newPasswordRepeat'         => 'Ripeti Nuova Password',
    'resetPassword'             => 'Reset Password'
];