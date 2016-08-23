

<p>Hello,</p>
<br>
Looks like you'd like to change your password. Please click the following link to do so: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a><br><br>
Please disregard this e-mail if you did not request a password reset.
<br><br>
Cheers,
<br><br>
The IT team
