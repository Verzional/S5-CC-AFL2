<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        /* Basic Resets */
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Main Container */
        .body-wrap {
            background-color: #f3f4f6; /* bg-gray-100 */
            width: 100%;
            min-height: 100vh;
            padding: 16px; /* p-4 */
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

        /* Email Card */
        .card {
            background-color: #ffffff; /* bg-white */
            border-radius: 1rem; /* rounded-2xl */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); /* shadow-xl */
            width: 100%;
            max-width: 28rem; /* max-w-md */
            padding: 32px; /* p-8 */
            border-top: 4px solid #4f46e5; /* border-t-4 border-indigo-600 */
            box-sizing: border-box;
        }

        /* Header Section */
        .header {
            text-align: center; /* text-center */
        }

        .icon-wrap {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 16px; /* mb-4 */
            width: 64px; /* w-16 */
            height: 64px; /* h-16 */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px; /* rounded-full */
            background-color: #e0e7ff; /* bg-indigo-100 */
            color: #4f46e5; /* text-indigo-600 */
        }

        .icon-svg {
            width: 32px; /* w-8 */
            height: 32px; /* h-8 */
        }

        .title {
            font-size: 1.5rem; /* text-2xl */
            line-height: 2rem;
            font-weight: 700; /* font-bold */
            color: #1f2937; /* text-gray-800 */
        }

        .subtitle {
            color: #6b7280; /* text-gray-500 */
            margin-top: 4px; /* mt-1 */
        }

        /* Content Box */
        .content-box {
            margin-top: 24px; /* mt-6 */
            background-image: linear-gradient(to bottom right, #f5f3ff, #f3e8ff); /* bg-gradient-to-br from-indigo-50 to-purple-50 */
            border-radius: 0.5rem; /* rounded-lg */
            padding: 24px; /* p-6 */
        }

        .greeting {
            font-size: 1.125rem; /* text-lg */
            line-height: 1.75rem;
            font-weight: 600; /* font-semibold */
            color: #374151; /* text-gray-700 */
            margin-bottom: 8px; /* mb-2 */
        }

        .greeting-name {
            color: #4f46e5; /* text-indigo-600 */
            font-weight: 700; /* font-bold */
        }

        .text-main {
            color: #4b5563; /* text-gray-600 */
            line-height: 1.625; /* leading-relaxed */
        }

        .email-info {
            margin-top: 16px; /* mt-4 */
            padding: 12px; /* p-3 */
            background-color: #ffffff; /* bg-white */
            border-radius: 0.25rem; /* rounded */
            border: 1px solid #c7d2fe; /* border border-indigo-200 */
        }

        .text-small {
            font-size: 0.875rem; /* text-sm */
            line-height: 1.25rem;
            color: #4b5563; /* text-gray-600 */
        }

        .text-small strong, .font-semibold {
            font-weight: 600; /* font-semibold */
        }
        
        .text-indigo {
            color: #4f46e5; /* text-indigo-600 */
        }

        /* Details & Notices */
        .details {
            margin-top: 24px; /* mt-6 */
            text-align: center; /* text-center */
            color: #4b5563; /* text-gray-600 */
            margin-bottom: 16px; /* mb-4 */
        }

        .notice {
            margin-top: 24px; /* mt-6 */
            padding: 16px; /* p-4 */
            background-color: #eff6ff; /* bg-blue-50 */
            border-left: 4px solid #60a5fa; /* border-l-4 border-blue-400 */
            border-radius: 0.25rem; /* rounded */
            color: #1e40af; /* text-blue-800 */
            font-size: 0.875rem; /* text-sm */
        }

        /* Support & Footer */
        .support {
            margin-top: 24px; /* mt-6 */
            text-align: center; /* text-center */
            font-size: 0.875rem; /* text-sm */
            color: #4b5563; /* text-gray-600 */
        }

        .support-link {
            color: #4f46e5; /* text-indigo-600 */
            text-decoration: none;
            font-weight: 600; /* font-semibold */
        }
        .support-link:hover {
            text-decoration: underline; /* hover:underline */
        }

        .footer {
            margin-top: 32px; /* mt-8 */
            padding-top: 24px; /* pt-6 */
            border-top: 1px solid #e5e7eb; /* border-t border-gray-200 */
            font-size: 0.75rem; /* text-xs */
            color: #9ca3af; /* text-gray-400 */
            text-align: center; /* text-center */
            line-height: 1.5;
        }

    </style>
</head>

<body class="body-wrap">
    
    <div class="card">

        <!-- Header -->
        <div class="header">
            <div class="icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                </svg>
            </div>
            <h1 class="title">Welcome to Cloud Computing!</h1>
            <p class="subtitle">You have registered for the Cloud Computing class for Semester 5.</p>
        </div>

        <!-- Content -->
        <div class="content-box">
            <h2 class="greeting">
                Hello, <span class="greeting-name">{{ $name }}</span>!
            </h2>
            <p class="text-main">
                Welcome to the class! We are excited to have you join us.
                You'll learn about cloud architecture, deployment, and best practices.
            </p>

            @if (isset($email))
                <div class="email-info">
                    <p class="text-small">
                        <span class="font-semibold">Registered Email:</span>
                        <span class="text-indigo">{{ $email }}</span>
                    </p>
                </div>
            @endif
        </div>

        <!-- Course Details -->
        <div class="details">
            <p>
                Get ready to explore the world of cloud computing! The class schedule and materials will be shared
                soon.
                Make sure to check your student portal for updates.
            </p>
        </div>

        <!-- Important Notice -->
        <div class="notice">
            <p>
                <strong>Important:</strong> Keep this email for your records. All course communications will be sent
                to your registered email address.
            </p>
        </div>

        <!-- Support -->
        <div class="support">
            <p>
                Need help?
                <a href="#" class="support-link">Contact Support</a>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>
                If you did not register, please ignore this email.<br>
                This email was sent automatically.<br><br>
                © {{ date('Y') }} University. All Rights Reserved.
            </p>
        </div>
    </div>
    
</body>

</html>
