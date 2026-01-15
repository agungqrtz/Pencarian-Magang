<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Magang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            margin: 0;
            background: #f2f2f7;
            display: flex;
            justify-content: center;
        }

        /* WRAPPER IPHONE */
        .app {
            width: 100%;
            max-width: 390px;
            min-height: 100vh;
            background: #f2f2f7;
            position: relative;
        }

        /* HEADER */
        .header {
            position: sticky;
            top: 0;
            z-index: 50;
            display: flex;
            align-items: center;
            padding: 14px 16px;
            background: #ffffff;
            border-bottom: 1px solid #e5e5ea;
        }

        .header a {
            text-decoration: none;
            font-size: 22px;
            color: #000;
            width: 32px;
        }

        .header h2 {
            flex: 1;
            text-align: center;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
        }

        .header span {
            width: 32px;
            text-align: right;
            font-size: 18px;
        }

        /* CONTENT */
        .content {
            padding: 16px;
            padding-bottom: 180px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 16px;
            text-align: center;
        }

        /* CARD */
        .card {
            background: #e6e6eb;
            border-radius: 14px;
            padding: 14px;
            margin-bottom: 16px;
        }

        .card h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 600;
        }

        .card p {
            margin: 4px 0 10px;
            font-size: 12px;
            color: #555;
        }

        /* PROGRESS */
        .progress-text {
            font-size: 12px;
            margin-bottom: 6px;
            color: #333;
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: #3a3a3c;
            border-radius: 10px;
        }

        /* FOOTER CARD */
        .card-footer {
            display: flex;
            align-items: center;
            margin-top: 10px;
            font-size: 11px;
            color: #444;
        }

        .avatars {
            display: flex;
        }

        .avatars span {
            width: 18px;
            height: 18px;
            background: #8e8e93;
            border-radius: 50%;
            margin-right: 4px;
            font-size: 11px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatars span::before {
            content: "👤";
        }

        .deadline {
            margin-left: auto;
            color: #555;
        }

        /* FLOAT BUTTON */
        .add-btn {
            position: fixed;
            right: calc(50% - 390px / 2 + 18px);
            bottom: 110px;
            width: 54px;
            height: 54px;
            background: #ffffff;
            border-radius: 50%;
            box-shadow: 0 8px 20px rgba(0,0,0,.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            text-decoration: none;
            color: #000;
            z-index: 100;
        }

        @media (max-width: 420px) {
            .add-btn {
                right: 18px;
            }
        }

        /* BOTTOM NAV */
        .bottom-nav-fixed {
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 390px;
            background: #EBEBEB;
            border-top: 1px solid #d1d5db;
            border-radius: 30px 30px 0 0;
            padding: 14px 36px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 60;
        }

        .bottom-nav-fixed a {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8e8e93;
            text-decoration: none;
            transition: color .2s ease;
        }

        .bottom-nav-fixed a.active,
        .bottom-nav-fixed a:hover {
            color: #000;
        }

        .bottom-nav-fixed svg {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<div class="app">

    <!-- HEADER -->
    <div class="header">
        <a href="{{ route('beranda') }}">←</a>
        <h2>Dashboard Magang</h2>
        <span>🔔</span>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <div class="section-title">Proyek Aktif</div>

        @foreach($projects as $project)
            <div class="card">
                <h3>{{ $project['title'] }}</h3>
                <p>{{ $project['company'] }}</p>

                <div class="progress-text">
                    {{ $project['progress'] }}% Selesai
                </div>

                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ $project['progress'] }}%"></div>
                </div>

                <div class="card-footer">
                    <div class="avatars">
                        @for($i = 0; $i < $project['members']; $i++)
                            <span></span>
                        @endfor
                    </div>
                    <div class="deadline">
                        Deadline : {{ $project['deadline'] }}
                    </div>
                    <div class="card-footer">
    <div style="margin-left:auto; display:flex; gap:12px;">
        <!-- EDIT -->
        <a href="{{ route('projects.edit', $project->id) }}"
           style="text-decoration:none;font-size:14px;">
            ✏️
        </a>

        <!-- DELETE -->
        <form action="{{ route('projects.destroy', $project->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus proyek ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    style="background:none;border:none;font-size:14px;cursor:pointer;">
                🗑️
            </button>
        </form>
    </div>
</div>
    
                </div>
            </div>
        @endforeach
    </div>

    <!-- FLOAT BUTTON -->
 <a href="{{ route('projects.create') }}" class="add-btn">+</a>


    <!-- BOTTOM NAV -->
    <div class="bottom-nav-fixed">
        <a href="#" class="active">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.632 8.632a.75.75 0 0 1-.53 1.28h-1.47v7.497a.75.75 0 0 1-.75.75H5.596a.75.75 0 0 1-.75-.75V13.753H3.37a.75.75 0 0 1-.53-1.28L11.47 3.84Z"/>
            </svg>
        </a>

        <a href="{{ route('profile') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0"/>
            </svg>
        </a>

        <a href="{{ route('pengaturan') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.65 1.65 0 0 0 15 19.4"/>
            </svg>
        </a>
    </div>

</div>

</body>
</html>
