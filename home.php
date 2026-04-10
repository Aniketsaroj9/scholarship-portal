<?php session_start();
if(empty($_SESSION['id'])):
      header('Location:login.php');  
      exit;
endif;  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Scholarship Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --primary-hover: #4f46e5;
            --bg-color: #0f172a;
            --glass-bg: rgba(30, 41, 59, 0.7);
            --glass-border: rgba(255, 255, 255, 0.1);
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --input-bg: rgba(15, 23, 42, 0.6);
            --green: #22c55e;
            --amber: #f59e0b;
            --rose: #f43f5e;
            --cyan: #06b6d4;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background: var(--bg-color);
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(236, 72, 153, 0.15) 0px, transparent 50%);
            background-attachment: fixed;
            color: var(--text-main);
        }

        /* ── Navbar ── */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-brand {
            font-size: 1.25rem;
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-actions { display: flex; gap: 0.75rem; align-items: center; }

        .btn {
            padding: 0.65rem 1.4rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            font-family: inherit;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-main);
            border: 1px solid var(--glass-border);
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.08); transform: translateY(-1px); }

        .btn-danger {
            background: rgba(244, 63, 94, 0.15);
            color: var(--rose);
            border: 1px solid rgba(244, 63, 94, 0.3);
        }
        .btn-danger:hover { background: rgba(244, 63, 94, 0.25); transform: translateY(-1px); }

        /* ── Hero Section ── */
        .hero {
            text-align: center;
            padding: 4rem 2rem 2rem;
            animation: fadeIn 0.6s ease-out forwards;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .hero h1 .wave { display: inline-block; animation: wave 2s ease-in-out infinite; }

        @keyframes wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(20deg); }
            50% { transform: rotate(-10deg); }
            75% { transform: rotate(15deg); }
        }

        .hero p {
            color: var(--text-muted);
            font-size: 1.1rem;
            max-width: 550px;
            margin: 0 auto;
        }

        /* ── Cards Grid ── */
        .dashboard {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 2rem 4rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            animation: fadeIn 0.6s ease-out 0.15s both;
        }

        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.35s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.5);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .card-icon.purple { background: rgba(99, 102, 241, 0.2); }
        .card-icon.amber  { background: rgba(245, 158, 11, 0.2); }
        .card-icon.green  { background: rgba(34, 197, 94, 0.2); }
        .card-icon.cyan   { background: rgba(6, 182, 212, 0.2); }
        .card-icon.rose   { background: rgba(244, 63, 94, 0.2); }

        .card h3 {
            font-size: 1.15rem;
            font-weight: 600;
        }

        .card p {
            color: var(--text-muted);
            font-size: 0.92rem;
            line-height: 1.6;
            margin: 0;
        }

        .card .arrow {
            margin-top: auto;
            color: var(--text-muted);
            font-size: 0.85rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.4rem;
            transition: color 0.3s ease;
        }

        .card:hover .arrow { color: var(--primary); }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .hero h1 { font-size: 1.8rem; }
            .dashboard { grid-template-columns: 1fr; }
            .navbar { padding: 1rem; }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="nav-brand">🎓 Scholarship Portal</div>
        <div class="nav-actions">
            <a href="signup.php" class="btn btn-ghost">Sign Up</a>
            <a href="logout_process.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <section class="hero">
        <h1><span class="wave">👋</span> Welcome Back!</h1>
        <p>Manage your scholarship applications, check eligible schemes, and track your status — all from one place.</p>
    </section>

    <div class="dashboard">
        <a href="cheak.php" class="card" id="card-check">
            <div class="card-icon purple">🔍</div>
            <h3>Check Eligibility</h3>
            <p>Enter your category to see all scholarship schemes you're eligible for.</p>
            <span class="arrow">Explore →</span>
        </a>

        <a href="regis.php" class="card" id="card-apply">
            <div class="card-icon amber">📝</div>
            <h3>Apply for Scholarship</h3>
            <p>Fill out the registration form and submit your application for a scholarship.</p>
            <span class="arrow">Apply Now →</span>
        </a>

        <a href="apply.php" class="card" id="card-status">
            <div class="card-icon green">📋</div>
            <h3>Application Status</h3>
            <p>View the details and current status of your most recent scholarship application.</p>
            <span class="arrow">View Status →</span>
        </a>

        <a href="scheme.html" class="card" id="card-schemes">
            <div class="card-icon cyan">📚</div>
            <h3>Browse Schemes</h3>
            <p>Explore all available government scholarship schemes and their requirements.</p>
            <span class="arrow">Browse →</span>
        </a>

        <a href="https://www.digilocker.gov.in/" target="_blank" class="card" id="card-digilocker">
            <div class="card-icon rose">🔐</div>
            <h3>DigiLocker</h3>
            <p>Link your DigiLocker account to fetch marksheets and caste certificates instantly.</p>
            <span class="arrow">Connect →</span>
        </a>
    </div>

</body>
</html>