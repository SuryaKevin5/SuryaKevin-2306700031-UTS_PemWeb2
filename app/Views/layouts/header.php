<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Doa Islami</title>

    <!-- Bootstrap -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    >

    <!-- Bootstrap Icons -->

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Animate CSS -->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    >

    <!-- Google Font -->

    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
    >

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{

            background:
            linear-gradient(
                135deg,
                #f0f9ff,
                #e0f2fe,
                #f8fafc
            );

            min-height:100vh;

            color:#1e293b;

            transition:0.4s;

            overflow-x:hidden;
        }

        /* SCROLLBAR */

        ::-webkit-scrollbar{
            width:10px;
        }

        ::-webkit-scrollbar-thumb{
            background:#38bdf8;
            border-radius:10px;
        }

        /* NAVBAR */

        .navbar{

            background:
            rgba(255,255,255,0.7) !important;

            backdrop-filter:blur(15px);

            border-bottom:
            1px solid rgba(0,0,0,0.05);
        }

        .navbar-brand{

            color:#0284c7 !important;

            font-size:24px;

            letter-spacing:1px;
        }

        .nav-link{

            color:#334155 !important;

            transition:0.3s;

            font-weight:500;
        }

        .nav-link:hover{

            color:#0ea5e9 !important;

            transform:translateY(-2px);
        }

        /* HERO */

        .hero{

            background:
            linear-gradient(
                135deg,
                rgba(56,189,248,0.18),
                rgba(255,255,255,0.7)
            );

            border:
            1px solid rgba(255,255,255,0.6);

            backdrop-filter:blur(18px);

            border-radius:35px;

            padding:90px 35px;

            position:relative;

            overflow:hidden;

            box-shadow:
            0 10px 35px rgba(0,0,0,0.08);
        }

        .hero::before{

            content:'';

            position:absolute;

            width:350px;
            height:350px;

            background:
            rgba(56,189,248,0.12);

            border-radius:50%;

            top:-120px;
            right:-120px;
        }

        .hero h1{

            font-weight:700;

            color:#0f172a;
        }

        .hero p{

            color:#475569;
        }

        /* CARD */

        .card-doa{

            background:
            rgba(255,255,255,0.75);

            border:
            1px solid rgba(255,255,255,0.8);

            border-radius:28px;

            overflow:hidden;

            transition:0.4s;

            backdrop-filter:blur(12px);

            color:#1e293b;
        }

        .card-doa:hover{

            transform:
            translateY(-12px)
            scale(1.02);

            box-shadow:
            0 15px 35px
            rgba(14,165,233,0.18);
        }

        /* ARAB */

        .arab{

            font-size:36px;

            line-height:75px;

            text-align:right;

            color:#0284c7;
        }

        /* BUTTON */

        .btn-main{

            background:
            linear-gradient(
                135deg,
                #0ea5e9,
                #38bdf8
            );

            border:none;

            color:white;

            border-radius:14px;

            padding:10px 20px;

            transition:0.3s;

            position:relative;

            overflow:hidden;
        }

        .btn-main:hover{

            transform:
            translateY(-3px)
            scale(1.03);

            box-shadow:
            0 8px 20px
            rgba(56,189,248,0.35);

            color:white;
        }

        .btn-main::before{

            content:'';

            position:absolute;

            width:100%;
            height:100%;

            background:
            rgba(255,255,255,0.15);

            top:0;
            left:-100%;

            transition:0.5s;
        }

        .btn-main:hover::before{

            left:100%;
        }

        /* INPUT */

        .form-control{

            background:
            rgba(255,255,255,0.7);

            border:
            1px solid rgba(0,0,0,0.06);

            color:#0f172a !important;

            border-radius:15px;
        }

        .form-control:focus{

            border-color:#38bdf8;

            box-shadow:none;
        }

        .form-control::placeholder{

            color:#64748b;
        }

        .input-group-text{

            background:
            rgba(56,189,248,0.15);

            border:none;

            color:#0284c7;
        }

        /* TEXT */

        .text-muted{

            color:#64748b !important;
        }

        /* SPINNER */

        .spinner-wrapper{

            position:fixed;

            top:0;
            left:0;

            width:100%;
            height:100%;

            background:white;

            display:flex;

            justify-content:center;

            align-items:center;

            z-index:99999;
        }

        /* DARK MODE */

        .dark-mode{

            background:
            linear-gradient(
                135deg,
                #020617,
                #0f172a,
                #111827
            ) !important;

            color:white !important;
        }

        .dark-mode .navbar{

            background:
            rgba(2,6,23,0.85) !important;
        }

        .dark-mode .navbar-brand{

            color:#7dd3fc !important;
        }

        .dark-mode .nav-link{

            color:#f1f5f9 !important;
        }

        .dark-mode .hero{

            background:
            linear-gradient(
                135deg,
                rgba(15,23,42,0.95),
                rgba(30,41,59,0.95)
            );

            border:
            1px solid rgba(255,255,255,0.05);
        }

        .dark-mode .hero h1{

            color:white;
        }

        .dark-mode .hero p{

            color:#cbd5e1;
        }

        .dark-mode .card-doa{

            background:
            rgba(15,23,42,0.88);

            color:white;

            border:
            1px solid rgba(255,255,255,0.05);
        }

        .dark-mode .text-muted{

            color:#cbd5e1 !important;
        }

        .dark-mode .arab{

            color:#7dd3fc;
        }

        .dark-mode .form-control{

            background:
            rgba(255,255,255,0.05);

            color:white !important;

            border:
            1px solid rgba(255,255,255,0.08);
        }

        .dark-mode .form-control::placeholder{

            color:#cbd5e1;
        }

        .dark-mode .input-group-text{

            background:
            rgba(56,189,248,0.2);

            color:white;
        }

        /* FLOATING */

        .floating{

            animation:floating 3s ease-in-out infinite;
        }

        @keyframes floating{

            0%{
                transform:translateY(0px);
            }

            50%{
                transform:translateY(-10px);
            }

            100%{
                transform:translateY(0px);
            }

        }

    </style>

</head>

<body>

<!-- LOADING -->

<div class="spinner-wrapper" id="loading">

    <div class="spinner-border text-info"></div>

</div>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg shadow sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold floating" href="/">

            <i class="bi bi-stars"></i>
            Doa Islami

        </a>

        <button
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#menu"
        >

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a class="nav-link" href="/">
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="/random">
                        Random Doa
                    </a>

                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">

                    <button
                    class="btn btn-main"
                    onclick="toggleDarkMode()"
                    >

                        <i class="bi bi-moon-stars-fill"></i>

                    </button>

                </li>

            </ul>

        </div>

    </div>

</nav>