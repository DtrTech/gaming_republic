<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body style="font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 400px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <img src="{{ asset('images/otp-banner.png') }}" alt="OTP Banner" style="width: 100%; max-width: 200px; display: block; margin: 0 auto;">
        <h2>Welcome to Gaming Republic Hub!</h2>
        <p>Thank you for registering. Your OTP code is:</p>
        <h1 style="color: #ff6600;">{{ $otp }}</h1>
        <p>Please enter this OTP to verify your email.</p>
        <p style="font-size: 12px; color: #888;">If you didn’t request this, you can ignore this email.</p>
    </div>
</body>
</html>
