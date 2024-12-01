<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Set global font to Poppins */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Set background image with blur effect and no border */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://gamegavel.com/wp-content/uploads/2022/12/Best_Payot_Casino-scaled.jpg');
            background-size: cover;
            background-position: center;
            filter: blur(8px); /* Apply blur */
            z-index: -1; /* Ensure the background is behind content */
        }

        /* Overlay effect to darken background */
        .background::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: -1;
        }

        /* Bold style for the main title */
        .main-title {
            font-weight: bold;
        }

        /* Bold style for game name */
        .game-name {
            font-weight: bold;
        }

        /* Bold style for user name */
        .user-name {
            font-weight: bold;
        }

        .btn-blink {
            background: linear-gradient(90deg, red, orange, yellow, green, blue, indigo, violet);
            background-size: 400%;
            animation: blink 2s infinite linear;
            color: white;
            border: 2px solid #fff;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
        }

        .btn-blink:hover {
            transform: scale(1.1);
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.6);
        }

        @keyframes blink {
            0% { background-position: 0%; }
            50% { background-position: 100%; }
            100% { background-position: 0%; }
        }

        .game-card {
            position: relative;
            background-size: cover;
            background-position: center;
            padding: 20px;
            text-align: center;
            color: white;
            transition: transform 0.2s ease-in-out;
        }

        .game-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay for each game card */
            z-index: 1;
        }

        .game-card .card-body {
            position: relative;
            z-index: 2;
        }

        .togel { background-image: url('https://t3.ftcdn.net/jpg/01/08/03/34/360_F_108033406_AMdgttH9VuerASIl1RMegelEEP7CufFu.jpg'); }
        .casino { background-image: url('https://static.toiimg.com/photo/msid-110593191,width-96,height-65.cms'); }
        .slot { background-image: url('https://t3.ftcdn.net/jpg/07/86/64/24/360_F_786642401_nlZhfcyJMvcBE0QrCKZRUtJztEme6WGe.jpg'); }
        .poker { background-image: url('https://images6.alphacoders.com/996/996802.jpg'); }
    </style>
    <title>Game List</title>
</head>
<body>
    <!-- Background Image -->
    <div class="background"></div>

    <div class="container my-5">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="fw-bold main-title">FerTOTO</h1>
            @auth
                <p class="lead">Selamat datang, <strong class="user-name">{{ $user->name }}</strong></p>
                <p>Saldo Anda: <span class="badge bg-success">Rp {{ number_format($user->balance, 2) }}</span></p>
            @else
                <p class="text-muted">Silakan <a href="{{ route('login') }}" class="text-decoration-none">Login</a> untuk melihat saldo Anda.</p>
            @endauth
        </div>

        <!-- Game List -->
        <div class="row">
            @foreach ($games as $game)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 game-card {{ strtolower($game['name']) }}">
                        <div class="card-body">
                            <h3 class="card-title game-name">{{ $game['name'] }}</h3>
                            <p class="card-text">{{ $game['description'] }}</p>
                            <a href="#" class="btn btn-blink">Mainkan {{ $game['name'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
