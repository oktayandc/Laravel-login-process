<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
        }

        .formbold-mb-5 {
            margin-bottom: 20px;
        }

        .formbold-pt-3 {
            padding-top: 12px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
        }

        .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            margin-bottom: 12px;
        }

        .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .formbold-btn-register {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 15px;
            /* margin-left: 100px; */
            margin-left: 275px;
            text-decoration: none; /* linkin altında bulunan çizgiyi kaldırır. */
        }
        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .w-full {
            width: 100%;
        }

        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }
    </style>
</head>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <h2 class="formbold-form-label-2">Register</h2>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $hatalar)
                <li>{{$hatalar}}</li>
                @endforeach
            </ul>
            @endif
            <form action="{{ route('register') }}" method="post" class="flex flex-wrap">
                @csrf
                <div class="w-full formbold--mx-3 formbold-px-3">
                    <label for="name" class="formbold-form-label">Name</label>
                    <input type="text" id="name" name="name" class="formbold-form-input" required>
                </div>
                <div class="w-full formbold--mx-3 formbold-px-3">
                    <label for="email" class="formbold-form-label">Email</label>
                    <input type="email" id="email" name="email" class="formbold-form-input" required>
                </div>
                <div class="w-full formbold--mx-3 formbold-px-3">
                    <label for="password" class="formbold-form-label">Password</label>
                    <input type="password" id="password" name="password" class="formbold-form-input" required>
                </div>
                <div class="w-full formbold--mx-3 formbold-px-3">
                    <label for="password_confirmation" class="formbold-form-label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="formbold-form-input" required>
                </div>
                <div class="w-full formbold--mx-3 formbold-px-3">
                    <button type="submit" class="formbold-btn">Register</button>
                    <a href="{{route('login')}}" class="formbold-btn-register">Return</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
