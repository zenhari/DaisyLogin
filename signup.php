<!DOCTYPE html>
<html lang="fa" data-theme="night">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ثبت نام</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            direction: rtl;
            text-align: right;
        }
    </style>
    <script>
        function toggleTheme() {
            const htmlElement = document.documentElement;
            const currentTheme = htmlElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'night' ? 'cupcake' : 'night';
            htmlElement.setAttribute('data-theme', newTheme);
        }
    </script>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-base-200">
        <div class="card w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="card-title text-center">ثبت نام</h2>
                    <button class="btn btn-outline btn-sm" onclick="toggleTheme()">حالت شب</button>
                </div>
                <form>
                    <div class="form-control">
                        <label class="label" for="username">
                            <span class="label-text">نام کاربری</span>
                        </label>
                        <input type="text" id="username" placeholder="نام کاربری" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label" for="password">
                            <span class="label-text">رمز عبور</span>
                        </label>
                        <input type="password" id="password" placeholder="رمز عبور" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer" for="remember">
                            <input type="checkbox" id="remember" class="checkbox checkbox-primary">
                            <span class="label-text">مرا به خاطر بسپار</span>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary btn-outline">ثبت نام</button>
                    </div>
                </form>
                <div class="text-center mt-4">
                    <button class="btn btn-link">ورود</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
