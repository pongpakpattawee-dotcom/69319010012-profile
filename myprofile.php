//ข้อความจากประวีณ
// ผมนายเนติวิทย์
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[SYSTEM ACCESS] - PONGSAPAK PATHAWI</title>
    <style>
        :root {
            --primary-color: #00ff41;
            --secondary-color: #008f11;
            --bg-color: #050505;
            --card-bg: #0d0d0d;
            --text-color: #00ff41;
            --border-style: 1px solid #00ff41;
        }
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-image: linear-gradient(rgba(0, 255, 65, 0.05) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(0, 255, 65, 0.05) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .terminal-header {
            background: #111;
            border: var(--border-style);
            border-bottom: none;
            padding: 8px 15px;
            border-radius: 8px 8px 0 0;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            color: #888;
        }
        .profile-card {
            background: var(--card-bg);
            border-radius: 0 0 8px 8px;
            border: var(--border-style);
            padding: 30px;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .profile-card::before {
            content: " ";
            display: block;
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 255, 0, 0.06));
            z-index: 2;
            background-size: 100% 2px, 3px 100%;
            pointer-events: none;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            background: #000;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            border: 2px dashed var(--primary-color);
            box-shadow: 0 0 15px rgba(0, 255, 65, 0.3);
        }
        .info-section {
            background: var(--card-bg);
            border-radius: 8px;
            border: var(--border-style);
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 255, 65, 0.1);
        }
        .guestbook-section {
            background: #000;
            border-radius: 8px;
            border: 2px dashed var(--primary-color);
            padding: 30px;
        }
        h1, h2, h3 {
            color: #fff;
            text-shadow: 0 0 8px var(--primary-color);
            margin-top: 0;
        }
        .blink {
            animation: blinker 1s linear infinite;
        }
        @keyframes blinker {
            50% { opacity: 0; }
        }
        .tag {
            background: #000;
            color: var(--primary-color);
            border: 1px solid var(--secondary-color);
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 13px;
            display: inline-block;
            margin: 5px;
            font-weight: bold;
        }
        .message-box {
            background: #0d0d0d;
            border: 1px solid var(--secondary-color);
            border-left: 5px solid var(--primary-color);
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
            color: #a3e635;
        }
        .status-online {
            color: #00ff41;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="terminal-header">
        <div style="color: #ff5555;">● ● ● <span style="color:#00ff41; margin-left:10px;">root@pongsapak_sec:~</span></div>
        <div>STATUS: <span class="status-online">CONNECTED</span></div>
    </div>
    
    <div class="profile-card">
        <div class="profile-img">💀</div>
        <h1>NAME: นายพงศ์ภัค ปัถวี</h1>
        <p style="font-size: 18px; color: #00ff41; font-weight: bold; letter-spacing: 1px;">
            UID: 69319010012 <span class="blink">_</span>
        </p>
        <div style="margin-top: 15px;">
            <span class="tag">> DEPT: เทคโนโลยีสารสนเทศ</span>
            <span class="tag">> INST: อาชีวศึกษาชลบุรี</span>
        </div>
    </div>

    <div class="info-section">
        <h2>[//] CORE_SKILLS & PROTOCOLS</h2>
        <p style="color: #888;">> กำลังตรวจสอบและพัฒนาความรู้ในโมดูลระบบต่อไปนี้...</p>
        <div style="margin-top: 15px;">
            <span class="tag" style="border-color: #eab308; color: #facc15;">[#] PHP_BACKEND / SQL</span>
            <span class="tag" style="border-color: #38bdf8; color: #38bdf8;">[#] HTML5 / CSS3_CYBER</span>
            <span class="tag" style="border-color: #22c55e; color: #22c55e;">[#] FLUTTER_MOBILE_DEV</span>
            <span class="tag" style="border-color: #a855f7; color: #c084fc;">[#] GIT_VERSION_CONTROL</span>
        </div>
    </div>

    <div class="guestbook-section">
        <h2>💬 INCOMING_MESSAGES (ข้อความจากเนติวิทย์)</h2>
        
        <p style="color: #ffb86c; font-size: 13px; font-weight: bold;">
            [ WARNING: สมาชิกในทีมอีก 2 คน ต้องทำการแก้ไขไฟล์ messages.php เพื่อแทรกข้อความของตนเองเข้าสู่ระบบ ]
        </p>
        
        <hr style="border: 0; border-top: 1px dashed var(--secondary-color); margin: 20px 0;">
        
        <div class="messages-container">
            <?php include('messages.php'); ?>
        </div>
    </div>
</div>

</body>
</html>
