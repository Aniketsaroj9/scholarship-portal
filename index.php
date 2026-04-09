<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Portal | Student Framework</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --secondary: #f3f4f6;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --border: #e5e7eb;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-dark);
        }

        /* Navbar Layout */
        .navbar {
            background-color: var(--card-bg);
            border-bottom: 2px solid var(--border);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-brand img {
            height: 50px;
        }

        .nav-brand h2 {
            margin: 0;
            font-size: 1.5rem;
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
            border: 1px solid transparent;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border-color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--secondary);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
        }

        /* Marquee Alert */
        .alert-banner {
            background-color: #fef2f2;
            color: #b91c1c;
            border-bottom: 1px solid #fecaca;
            padding: 0.5rem;
            font-weight: 500;
            font-size: 0.95rem;
        }

        /* Main Grid */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 2rem;
        }

        @media (max-width: 850px) {
            .container {
                grid-template-columns: 1fr;
            }
        }

        /* Cards */
        .card {
            background: var(--card-bg);
            border-radius: 8px;
            border: 1px solid var(--border);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .card h3 {
            margin-top: 0;
            color: var(--primary);
            font-size: 1.25rem;
            border-bottom: 2px solid var(--secondary);
            padding-bottom: 0.5rem;
        }

        /* Content Formatting */
        .guideline-steps {
            list-style-type: decimal;
            padding-left: 1.2rem;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .guideline-steps li {
            margin-bottom: 0.8rem;
        }

        .notice-text {
            line-height: 1.6;
            color: var(--text-light);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 2rem;
            color: var(--text-light);
            border-top: 1px solid var(--border);
            margin-top: 3rem;
            background: var(--card-bg);
        }
    </style>
</head>
<body>

    <!-- Top Alert Banner -->
    <div class="alert-banner">
        <marquee behavior="scroll" direction="left" scrollamount="4">
            <b>NOTICE:</b> Application Acceptance (New/Renewal) for A.Y. 22-23 has commenced. Last date for Application Acceptance is 30th JUNE 2023. Re-apply has been extended till 30th JUNE 2023.
        </marquee>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-brand">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/800px-Seal_of_Maharashtra.svg.png" alt="Gov Logo">
            <h2>Portal Framework</h2>
        </div>
        <div class="nav-links">
            <a href="signup.php" class="btn btn-outline">Register New</a>
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
    </nav>

    <!-- Main Content Layout -->
    <div class="container">
        
        <!-- Left Column: Guidelines and Info -->
        <div class="content-main">
            
            <div class="card">
                <h3>Welcome to the Student Scholarship Portal</h3>
                <p class="notice-text">
                    This portal facilitates the direct benefit transfer of various educational schemes. Please ensure your profile is fully complete and your bank accounts are successfully verified before applying for any specific scholarship.
                </p>
            </div>

            <div class="card">
                <h3>Aadhaar Bank Seeding Guidelines (IPPB/DBT)</h3>
                <p class="notice-text">
                    Aadhaar seeding to your bank account is an important requirement for beneficiaries of various DBT schemes to receive funds directly into their account.
                </p>
                <div style="background-color: var(--secondary); padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                    <strong>If your scholarship is delayed due to seeding issues:</strong><br>
                    You can visit the nearest Post Office to open an India Post Payments Bank (IPPB) account with Aadhaar seeding.
                </div>
                
                <strong>Required Documents Check-list:</strong>
                <ol class="guideline-steps">
                    <li>Valid Registered Mobile number</li>
                    <li>Original Aadhaar number</li>
                    <li>PAN Card (if available)</li>
                    <li>Your Scholarship Application ID</li>
                </ol>
                <p class="notice-text"><small>* Account opening is handled in real-time and entirely paperless.</small></p>
            </div>

        </div>

        <!-- Right Column: Quick Links & Actions -->
        <div class="sidebar">
            <div class="card">
                <h3>Quick Actions</h3>
                <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 1rem;">
                    <a href="signup.php" class="btn btn-outline" style="text-align: center;">New Application Registration</a>
                    <a href="login.php" class="btn btn-primary" style="text-align: center;">Applicant Login</a>
                    <a href="#" class="btn btn-outline" style="text-align: center;">View Eligible Schemes</a>
                </div>
            </div>

            <div class="card" style="text-align: center;">
                <h3>DigiLocker Integration</h3>
                <p class="notice-text" style="font-size: 0.9rem;">Link your DigiLocker account to instantly fetch grade marksheets and caste certificates.</p>
                <a href="https://www.digilocker.gov.in/" target="_blank">
                    <img src="https://www.amsinform.com/wp-content/uploads/2022/04/digilocker-partner-logo.png" alt="Digilocker" style="width: 80%; margin-top: 1rem;">
                </a>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2026 Student Portal Prototype. Built for educational demonstration purposes.</p>
    </div>

</body>
</html>
