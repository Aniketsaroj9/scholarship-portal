<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Eligibility | Scholarship Portal</title>
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
            --rose: #f43f5e;
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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .container {
            width: 100%;
            max-width: 560px;
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.6s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .header .icon {
            font-size: 2.5rem;
            margin-bottom: 0.75rem;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .header p {
            color: var(--text-muted);
            font-size: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-muted);
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        input[type="text"] {
            width: 100%;
            background: var(--input-bg);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1rem;
            color: var(--text-main);
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }

        .actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 1rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            font-family: inherit;
            flex: 1;
            text-align: center;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.4);
        }
        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.6);
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-main);
            border: 1px solid var(--glass-border);
        }
        .btn-ghost:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        /* Results Section */
        .results {
            margin-top: 2rem;
            animation: fadeIn 0.4s ease-out forwards;
        }

        .results h2 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--green);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .result-card {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid var(--glass-border);
            border-radius: 14px;
            padding: 1.25rem;
            margin-bottom: 1rem;
        }

        .result-card .scheme-name {
            font-weight: 600;
            font-size: 1.05rem;
            margin-bottom: 0.5rem;
        }

        .result-card .income-note {
            color: var(--rose);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .no-result {
            text-align: center;
            padding: 1.5rem;
            color: var(--text-muted);
            background: rgba(15, 23, 42, 0.4);
            border-radius: 14px;
            border: 1px dashed rgba(255,255,255,0.1);
        }

        @media (max-width: 500px) {
            .container { padding: 2rem 1.5rem; }
            .actions { flex-direction: column-reverse; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <div class="icon">🔍</div>
        <h1>Check Eligibility</h1>
        <p>Enter your caste category to discover available scholarship schemes</p>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <label for="cast">Caste Category</label>
            <input type="text" id="cast" name="cast" required placeholder="e.g. OBC, SC, ST, OPEN">
        </div>

        <div class="actions">
            <a href="home.php" class="btn btn-ghost">← Home</a>
            <button class="btn btn-primary" type="submit" name="check">Check Now</button>
        </div>
    </form>

    <?php
    if(isset($_POST['check'])){
        $servername='localhost';
        $username='root';
        $password='';
        $dbname='login_db';
        
        $con=mysqli_connect($servername,$username,$password,$dbname);
        
        $sal=$_POST['cast'];
          
        $query=mysqli_query($con,"SELECT schol, money, cast FROM login_db.chek WHERE chek.cast = '$sal'") or die(mysqli_error($con));
        
        $counter=mysqli_num_rows($query);

        echo '<div class="results">';
        if($counter > 0) {
            echo '<h2>✅ Eligible Scholarships Found</h2>';
            while($row = $query->fetch_assoc()) {
                echo '<div class="result-card">';
                echo '<div class="scheme-name">' . htmlspecialchars($row['schol']) . '</div>';
                echo '<div class="income-note">⚠ Parents\' annual income must be less than ₹' . htmlspecialchars($row['money']) . '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="no-result">😔 No matching scholarships found for this category. Try a different caste category.</div>';
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>