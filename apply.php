<?php
$servername='localhost';
$username='root';
$password='';
$dbname='login_db';

$con=mysqli_connect($servername,$username,$password,$dbname);
$query=mysqli_query($con,"SELECT * FROM reg ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Status | Scholarship Portal</title>
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
            --green: #22c55e;
            --amber: #f59e0b;
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
            max-width: 600px;
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

        .header .icon { font-size: 2.5rem; margin-bottom: 0.75rem; }

        .header h1 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .header p { color: var(--text-muted); font-size: 1rem; }

        /* Status Badge */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(34, 197, 94, 0.15);
            color: var(--green);
            border: 1px solid rgba(34, 197, 94, 0.3);
            padding: 0.35rem 0.85rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 2rem;
        }

        .status-badge.pending {
            background: rgba(245, 158, 11, 0.15);
            color: var(--amber);
            border-color: rgba(245, 158, 11, 0.3);
        }

        /* Detail Rows */
        .detail-list { display: flex; flex-direction: column; gap: 0; }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid var(--glass-border);
        }

        .detail-row:last-child { border-bottom: none; }

        .detail-label {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .detail-value {
            font-size: 1rem;
            font-weight: 500;
            text-align: right;
            max-width: 60%;
        }

        /* No Data */
        .no-data {
            text-align: center;
            padding: 2.5rem;
            color: var(--text-muted);
        }

        .no-data .icon { font-size: 3rem; margin-bottom: 1rem; }

        .no-data p { margin-bottom: 1.5rem; font-size: 1.05rem; }

        /* Button */
        .actions {
            margin-top: 2.5rem;
            display: flex;
            gap: 1rem;
        }

        .btn {
            flex: 1;
            padding: 1rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            font-family: inherit;
            text-align: center;
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-main);
            border: 1px solid var(--glass-border);
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.1); transform: translateY(-2px); }

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

        @media (max-width: 500px) {
            .container { padding: 2rem 1.5rem; }
            .detail-row { flex-direction: column; align-items: flex-start; gap: 0.3rem; }
            .detail-value { text-align: left; max-width: 100%; }
            .actions { flex-direction: column-reverse; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <div class="icon">📋</div>
        <h1>Application Status</h1>
        <p>Your most recent scholarship application details</p>
    </div>

    <?php if ($row): ?>
        <div style="text-align:center;">
            <span class="status-badge pending">⏳ Under Review</span>
        </div>

        <div class="detail-list">
            <div class="detail-row">
                <span class="detail-label">First Name</span>
                <span class="detail-value"><?= htmlspecialchars($row['firstname']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Middle Name</span>
                <span class="detail-value"><?= htmlspecialchars($row['middelname'] ?? '—') ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Last Name</span>
                <span class="detail-value"><?= htmlspecialchars($row['lastname']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Email</span>
                <span class="detail-value"><?= htmlspecialchars($row['email']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Mobile</span>
                <span class="detail-value"><?= htmlspecialchars($row['mobilno']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Country</span>
                <span class="detail-value"><?= htmlspecialchars($row['country']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Caste</span>
                <span class="detail-value"><?= htmlspecialchars($row['cast']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Qualification</span>
                <span class="detail-value"><?= htmlspecialchars($row['qualification']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Current Status</span>
                <span class="detail-value"><?= htmlspecialchars($row['current']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">State</span>
                <span class="detail-value"><?= htmlspecialchars($row['state']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Scheme Applied</span>
                <span class="detail-value"><?= htmlspecialchars($row['schol']) ?></span>
            </div>
        </div>
    <?php else: ?>
        <div class="no-data">
            <div class="icon">📭</div>
            <p>No applications have been submitted yet.</p>
        </div>
    <?php endif; ?>

    <div class="actions">
        <a href="home.php" class="btn btn-ghost">← Home</a>
        <a href="regis.php" class="btn btn-primary">Apply Now</a>
    </div>
</div>

</body>
</html>
