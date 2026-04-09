<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Scholarship Portal</title>
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
        }

        body {
            margin: 0;
            padding: 2rem;
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
        }

        .container {
            width: 100%;
            max-width: 900px;
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
            margin-bottom: 3rem;
        }

        .header h1 {
            margin: 0 0 0.5rem 0;
            font-size: 2.25rem;
            font-weight: 700;
            background: linear-gradient(to right, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header p {
            margin: 0;
            color: var(--text-muted);
            font-size: 1.1rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-muted);
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            background: var(--input-bg);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            padding: 1rem;
            color: var(--text-main);
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            background: var(--input-bg);
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid var(--glass-border);
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            color: var(--text-main);
            font-size: 0.95rem;
            text-transform: none;
        }

        .radio-label input[type="radio"] {
            accent-color: var(--primary);
            width: 1.2rem;
            height: 1.2rem;
        }

        select option {
            background: var(--bg-color);
            color: var(--text-main);
        }

        .actions {
            margin-top: 3rem;
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            align-items: center;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            font-family: inherit;
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

        @media (max-width: 768px) {
            .container { padding: 2rem; }
            .actions { flex-direction: column-reverse; }
            .btn { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Registration Portal</h1>
        <p>Complete your profile to access eligible schemes</p>
    </div>

    <form action="regis_procc.php" method="post">
        <div class="form-grid">
            <!-- Personal Details -->
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="mid">Middle Name</label>
                <input type="text" id="mid" name="mid">
            </div>

            <div class="form-group">
                <label for="last">Last Name</label>
                <input type="text" id="last" name="last" required>
            </div>

            <!-- Contact -->
            <div class="form-group full-width" style="grid-template-columns: 1fr 1fr; display: grid; gap: 1.5rem;">
                <div style="display:flex; flex-direction:column; gap:0.5rem;">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div style="display:flex; flex-direction:column; gap:0.5rem;">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="number" id="mobile_number" name="mobile_number" required>
                </div>
            </div>

            <!-- Demographics -->
            <div class="form-group full-width">
                <label>Country & Caste Profile</label>
                <div class="radio-group" style="margin-bottom: 1rem;">
                    <div style="margin-right: 2rem;"><strong>Country:</strong></div>
                    <label class="radio-label"><input type="radio" value="India" name="country" checked> India</label>
                    <label class="radio-label"><input type="radio" value="Others" name="country"> Others</label>
                </div>
                <div class="radio-group">
                    <div style="margin-right: 2rem;"><strong>Caste:</strong></div>
                    <label class="radio-label"><input type="radio" value="OPEN" name="caste" checked> General</label>
                    <label class="radio-label"><input type="radio" value="OBC" name="caste"> OBC</label>
                    <label class="radio-label"><input type="radio" value="SC" name="caste"> SC</label>
                    <label class="radio-label"><input type="radio" value="ST" name="caste"> ST</label>
                </div>
            </div>

            <!-- Academics -->
            <div class="form-group full-width">
                <label>Academic Status</label>
                <div class="radio-group" style="margin-bottom: 1rem;">
                    <div style="margin-right: 2rem;"><strong>Highest Level:</strong></div>
                    <label class="radio-label"><input type="radio" value="school" name="graduation" checked> School</label>
                    <label class="radio-label"><input type="radio" value="under_graduation" name="graduation"> Under-Graduation</label>
                    <label class="radio-label"><input type="radio" value="post_graduation" name="graduation"> Post-Graduation</label>
                </div>
                <div class="radio-group">
                    <div style="margin-right: 2rem;"><strong>Current Study:</strong></div>
                    <label class="radio-label"><input type="radio" value="10_below" name="qualification" checked> Below 10th</label>
                    <label class="radio-label"><input type="radio" value="10th" name="qualification"> 10th</label>
                    <label class="radio-label"><input type="radio" value="12th" name="qualification"> 12th</label>
                    <label class="radio-label"><input type="radio" value="under_graduation" name="qualification"> Under-Grad</label>
                    <label class="radio-label"><input type="radio" value="post_graduation" name="qualification"> Post-Grad</label>
                </div>
            </div>

            <!-- Region & Scheme -->
            <div class="form-group">
                <label for="state">State</label>
                <select name="state" id="state">
                    <option value="maharashtra">Maharashtra</option>
                    <option value="madhyapradesh">Madhya Pradesh</option>
                    <option value="uttarpradesh">Uttar Pradesh</option>
                    <!-- Truncated full list for clarity, retained key options -->
                    <option value="karnataka">Karnataka</option>
                    <option value="gujrat">Gujarat</option>
                    <option value="delhi">Delhi</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="scheme">Target Scheme</label>
                <select name="scheme" id="scheme">
                    <option value="Tribual Development Department">Tribual Development Department</option>
                    <option value="Directorate of higher education">Directorate of Higher Education</option>
                    <option value="Directorate of technical education">Directorate of Technical Education</option>
                    <option value="Anant scholarship">Anant Scholarship</option>
                    <option value="VJNT,OBC and SBC Welfare Department">VJNT, OBC and SBC Welfare</option>
                </select>
            </div>
        </div>

        <div class="actions">
            <a href="home.php" class="btn btn-ghost">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </div>
    </form>
</div>

</body>
</html>