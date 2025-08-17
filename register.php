<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BibahoBd</title>
    <style>
        body {
            background: #f6f8e7;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .reg-container {
            background: #f6f8e7;
            padding: 0 0 40px 0;
        }
        .reg-title {
            font-size: 32px;
            font-weight: bold;
            margin: 0 0 8px 0;
            padding: 16px 0 0 24px;
        }
        .reg-breadcrumb {
            font-size: 18px;
            color: #7fa02a;
            margin: 0 0 24px 24px;
        }
        .reg-form-box {
            background: #fff;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            margin: 0 24px;
            padding: 24px 24px 16px 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .reg-form-title {
            background: #eaf2c2;
            font-size: 28px;
            font-weight: bold;
            padding: 10px 18px;
            border-radius: 4px 4px 0 0;
            margin: -24px -24px 24px -24px;
        }
        .reg-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px 32px;
        }
        .reg-field {
            margin-bottom: 18px;
        }
        .reg-label {
            font-size: 18px;
            font-weight: bold;
            color: #222;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
        }
        .reg-label .req {
            color: #d32f2f;
            margin-left: 4px;
        }
        .reg-input-group {
            display: flex;
            align-items: center;
            background: #f6f8e7;
            border-radius: 3px;
            border: 1px solid #e0e0e0;
            padding: 0 0 0 12px;
        }
        .reg-input-group .icon {
            font-size: 22px;
            color: #b6c36a;
            margin-right: 8px;
        }
        .reg-input, .reg-select {
            border: none;
            background: transparent;
            font-size: 18px;
            padding: 12px 8px;
            width: 100%;
            outline: none;
        }
        .reg-select {
            appearance: none;
        }
        .reg-dob-group {
            display: flex;
            gap: 8px;
        }
        .reg-dob-group select {
            flex: 1;
        }
        @media (max-width: 900px) {
            .reg-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="reg-container">
        <div class="reg-title">Create a new profile</div>
        <div class="reg-breadcrumb">Home &gt;&gt; Create a new profile</div>
        <div class="reg-form-box">
            <div class="reg-form-title">Basic Information</div>
            <form>
                <div class="reg-grid">
                    <div>
                        <div class="reg-field">
                            <div class="reg-label">Profile created by <span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128193;</span>
                                <select class="reg-select" required>
                                    <option value="">Select One</option>
                                    <option>Self</option>
                                    <option>Parent</option>
                                    <option>Sibling</option>
                                    <option>Relative</option>
                                    <option>Friend</option>
                                </select>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Candidate First Name <span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128100;</span>
                                <input class="reg-input" type="text" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Community / Religion <span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128761;</span>
                                <select class="reg-select" required>
                                    <option value="">Select Region</option>
                                    <option>Islam</option>
                                    <option>Hinduism</option>
                                    <option>Christianity</option>
                                    <option>Buddhism</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Date of Birth * ( yyyy/mm/dd )</div>
                            <div class="reg-input-group">
                                <span class="icon">&#128197;</span>
                                <div class="reg-dob-group" style="width:100%">
                                    <select class="reg-select" required>
                                        <option value="">Year</option>
                                        <!-- Years options -->
                                        <script>for(let y=2025;y>=1950;y--)document.write(`<option>${y}</option>`);</script>
                                    </select>
                                    <select class="reg-select" required>
                                        <option value="">Month</option>
                                        <option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
                                    </select>
                                    <select class="reg-select" required>
                                        <option value="">Day</option>
                                        <!-- Days options -->
                                        <script>for(let d=1;d<=31;d++)document.write(`<option>${d.toString().padStart(2,'0')}</option>`);</script>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Education<span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#127891;</span>
                                <select class="reg-select" required>
                                    <option value="">Select Education</option>
                                    <option>SSC</option>
                                    <option>HSC</option>
                                    <option>Bachelor</option>
                                    <option>Masters</option>
                                    <option>PhD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="reg-field">
                            <div class="reg-label">Looking For <span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128100;</span>
                                <select class="reg-select" required>
                                    <option value="">Select One</option>
                                    <option>Bride</option>
                                    <option>Groom</option>
                                </select>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Candidate Last Name<span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128100;</span>
                                <input class="reg-input" type="text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Caste / Social order <span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128761;</span>
                                <select class="reg-select" required>
                                    <option value="">Select Religion</option>
                                    <option>General</option>
                                    <option>OBC</option>
                                    <option>SC</option>
                                    <option>ST</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Marital Status<span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128142;</span>
                                <select class="reg-select" required>
                                    <option value="">Select Marital Status</option>
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Divorced</option>
                                    <option>Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="reg-field">
                            <div class="reg-label">Profession<span class="req">*</span></div>
                            <div class="reg-input-group">
                                <span class="icon">&#128188;</span>
                                <select class="reg-select" required>
                                    <option value="">Select Profession</option>
                                    <option>Engineer</option>
                                    <option>Doctor</option>
                                    <option>Teacher</option>
                                    <option>Business</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>