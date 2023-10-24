<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    @include('cdn')
</head>
<body style="font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; padding: 20px;">

    <div style="background-color: #ffffff; max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

        <h1 style="color: #333;">Verifikasi Alamat Email</h1>

        <p style="color: #777;">Silahkan klik tautan berikut untuk verifikasi alamat email Anda:</p>
        

        <a href="{{ route('sesi-index') }}" style="background-color: #007BFF; color: #fff; text-decoration: none; padding: 10px 20px; border-radius: 3px; display: inline-block; margin: 20px 0;">
            Verifikasi Email
        </a>

        <p style="color: #777; font-size: 14px;">Jika Anda tidak merasa melakukan tindakan ini, abaikan pesan ini.</p>
    </div>
</body>
</html>
