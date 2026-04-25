<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Abdul Halim</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #0f0c29;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            font-family: 'Segoe UI', sans-serif;
            overflow: hidden;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease forwards;
        }

        h1 {
            font-size: 3rem;
            color: white;
            letter-spacing: 4px;
            text-transform: uppercase;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .subtitle {
            margin-top: 16px;
            color: #a78bfa;
            font-size: 1.1rem;
            letter-spacing: 2px;
            animation: slideUp 2s ease forwards;
        }

        .line {
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #a78bfa, #60a5fa);
            margin: 20px auto;
            border-radius: 10px;
            animation: expand 2s ease forwards;
        }

        @keyframes glow {
            from { text-shadow: 0 0 10px #a78bfa, 0 0 20px #a78bfa; }
            to   { text-shadow: 0 0 20px #60a5fa, 0 0 40px #60a5fa; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes expand {
            from { width: 0; }
            to   { width: 300px; }
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .particles {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 4px; height: 4px;
            background: rgba(167, 139, 250, 0.5);
            border-radius: 50%;
            animation: float linear infinite;
        }

        @keyframes float {
            0%   { transform: translateY(100vh) scale(0); opacity: 0; }
            10%  { opacity: 1; }
            90%  { opacity: 1; }
            100% { transform: translateY(-10vh) scale(1); opacity: 0; }
        }
    </style>
</head>
<body>

<div class="particles" id="particles"></div>

<div class="container">
    <h1>Muhammad Abdul Halim</h1>
    <div class="line"></div>
    <p class="subtitle">Pemrograman Berbasis Web</p>
</div>

<script>
    const container = document.getElementById('particles');
    for (let i = 0; i < 40; i++) {
        const p = document.createElement('div');
        p.classList.add('particle');
        p.style.left = Math.random() * 100 + 'vw';
        p.style.animationDuration = (Math.random() * 6 + 4) + 's';
        p.style.animationDelay = (Math.random() * 5) + 's';
        p.style.width = p.style.height = (Math.random() * 4 + 2) + 'px';
        container.appendChild(p);
    }
</script>

</body>
</html>
