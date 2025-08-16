<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Resume - Portfolio Admin</title>
      <link rel="stylesheet" type="text/css" href="port.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

      /*  body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
*/
        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            margin: 100px auto;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header p {
            color: #666;
            font-size: 1.1rem;
        }

        .upload-section {
            margin-bottom: 30px;
        }

        .upload-area {
            border: 3px dashed #667eea;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            background: #f8f9ff;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .upload-area:hover {
            border-color: #764ba2;
            background: #f0f2ff;
            transform: translateY(-2px);
        }

        .upload-area.dragover {
            border-color: #764ba2;
            background: #e8ebff;
            transform: scale(1.02);
        }

        .upload-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 20px;
        }

        .upload-text {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .upload-subtext {
            color: #666;
            font-size: 0.9rem;
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-info {
            margin-top: 20px;
            padding: 15px;
            background: #e8f4f8;
            border-radius: 10px;
            display: none;
        }

        .file-info.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .file-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .file-size {
            color: #666;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background: #f8f9fa;
            color: #333;
            border: 2px solid #e1e5e9;
        }

        .btn-secondary:hover {
            background: #e9ecef;
            border-color: #667eea;
        }

        .success-message {
            background: linear-gradient(45deg, #56ab2f, #a8e6cf);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            display: none;
        }

        .success-message.show {
            display: block;
            animation: slideUp 0.5s ease;
        }

        .current-resume {
            background: #f8f9ff;
            border: 2px solid #667eea;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .current-resume h3 {
            color: #333;
            margin-bottom: 15px;
        }

        .resume-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .resume-info {
            flex: 1;
        }

        .resume-actions {
            display: flex;
            gap: 10px;
        }

        .btn-small {
            padding: 6px 15px;
            font-size: 0.9rem;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background: #138496;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .button-group {
                flex-direction: column;
            }

            .resume-details {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .resume-actions {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Skip link for screen readers -->
    <!-- <a href="#main" class="skip-link">Skip to content</a> -->

    <!-- Navigation -->
   <!--  <nav class="navbar" id="navbar" aria-label="Main navigation">
        <div class="nav-container">
            <div class="logo">Portfolio</div>
            <ul class="nav-menu" id="nav-menu" role="menu">
                <li role="none"><a href="#home" class="nav-link active" role="menuitem">Home</a></li>
                <li role="none"><a href="#about" class="nav-link" role="menuitem">About</a></li>
                <li role="none"><a href="#projects" class="nav-link" role="menuitem">Projects</a></li>
                <li role="none"><a href="#values" class="nav-link" role="menuitem">Philosophy</a></li>
                <li role="none"><a href="#contact" class="nav-link" role="menuitem">Contact</a></li>
            </ul>
            <button id="hamburger" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav> -->
    <div class="container">
        <div class="header">
            <h1>📄 Resume Manager</h1>
            <p>Upload and manage your resume for your portfolio</p>
        </div>

        <!-- Current Resume Section -->
        <div class="current-resume" id="currentResume" style="display: none;">
            <h3>Current Resume</h3>
            <div class="resume-details">
                <div class="resume-info">
                    <div class="file-name" id="currentFileName">My_Resume.pdf</div>
                    <div class="file-size" id="currentFileSize">1.2 MB</div>
                    <div class="file-size" id="currentUploadDate">Uploaded: Jan 15, 2025</div>
                </div>
                <div class="resume-actions">
                    <button class="btn btn-info btn-small" onclick="previewResume()">👁️ Preview</button>
                    <button class="btn btn-danger btn-small" onclick="deleteResume()">🗑️ Delete</button>
                </div>
            </div>
        </div>

        <!-- Upload Section -->
        <form action="uploadbackend.php" method="post" enctype="multipart/form-data" id="resumeForm" onsubmit="return showUploadSuccess()">
                <div class="upload-section">
                    <div class="upload-area" id="uploadArea">
                        <div class="upload-icon">📁</div>
                        <div class="upload-text">Drop your resume here or click to browse</div>
                        <div class="upload-subtext">Supported formats: PDF, DOC, DOCX (Max 10MB)</div>
                        <input type="file" class="file-input" name="resume" id="fileInput" accept=".pdf,.doc,.docx" />
                    </div>
                    <div class="file-info" id="fileInfo">
                        <div class="file-name" id="fileName"></div>
                        <div class="file-size" id="fileSize"></div>
                    </div>
                </div>

                <!-- Form Fields -->
            <!--     <div class="form-group">
                    <input type="file" name="resume" required><br>
                    <label for="resumeTitle">Resume Title</label>
                    <input type="text" id="resumeTitle" name="title" placeholder="e.g., Software Engineer Resume 2025" />
                </div> -->

                <div class="form-group">
                    <label for="description">Description (Optional)</label>
                    <textarea id="description" name="description" placeholder="Brief description of this resume version..."></textarea>
                </div>

                <div class="form-group">
                    <label for="tags">Tags (Optional)</label>
                    <input type="text" id="tags" name="tags" placeholder="e.g., frontend, react, javascript (comma-separated)" />
                </div>

                <!-- Action Buttons -->
                <div class="button-group">
                    <button class="btn btn-primary" onclick="uploadResume()">🚀 Upload Resume</button>
                    <button class="btn btn-secondary" onclick="clearForm()">🔄 Clear Form</button>
                </div>

                <!-- Success Message -->
                <div class="success-message" id="successMessage">
                    ✅ Resume uploaded successfully!
                </div>
            </div>
        </form>

        <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="personal-signature">
                <p>Crafting digital excellence in Lagos, Nigeria</p>
                <img src="signature.svg" alt="Personal signature" width="120" loading="lazy">
            </div>
            <p>&copy; 2025 Onyeukwu Ifeanyi Jacob. Built with HTML, CSS & JavaScript.</p>
            <button id="theme-toggle" class="theme-toggle hover-scale" aria-label="Toggle dark mode">
                <svg width="20" height="20" fill="currentColor">
                    <use href="#moon-icon"></use>
                </svg>
            </button>
        </div>
    </footer>

    <!-- SVG Sprite Sheet (hidden) -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="github-icon" viewBox="0 0 24 24">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
        </symbol>
        <symbol id="linkedin-icon" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
        </symbol>
        <symbol id="twitter-icon" viewBox="0 0 24 24">
            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
        </symbol>
        <symbol id="moon-icon" viewBox="0 0 24 24">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
        </symbol>
        <symbol id="sun-icon" viewBox="0 0 24 24">
            <path d="M12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM11 1h2v3h-2V1zm0 19h2v3h-2v-3zM3.515 4.929l1.414-1.414L7.05 5.636 5.636 7.05 3.515 4.93zM16.95 18.364l1.414-1.414 2.121 2.121-1.414 1.414-2.121-2.121zm2.121-14.85l1.414 1.415-2.121 2.121-1.414-1.414 2.121-2.121zM5.636 16.95l1.414 1.414-2.121 2.121-1.414-1.414 2.121-2.121zM23 11v2h-3v-2h3zM4 11v2H1v-2h3z"/>
        </symbol>
    </svg>


    <script>
        let selectedFile = null;
        let currentResumeData = null;

      

        function displayCurrentResume() {
            if (currentResumeData) {
                document.getElementById('currentResume').style.display = 'block';
                document.getElementById('currentFileName').textContent = currentResumeData.name;
                document.getElementById('currentFileSize').textContent = currentResumeData.size;
                document.getElementById('currentUploadDate').textContent = 'Uploaded: ' + currentResumeData.uploadDate;
            }
        }

        // File upload handling
        const uploadArea = document.getElementById('uploadArea').;
        const fileInput = document.getElementById('fileInput');
        const fileInfo = document.getElementById('fileInfo');

        // uploadArea.addEventListener('click', () => fileInput.click());
        uploadArea.addEventListener('click', (e) => {
                // Prevent double triggering when a file is already chosen
                if (!fileInput.files.length) {
                    fileInput.click();
                }
            });


        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFileSelect(files[0]);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                handleFileSelect(e.target.files[0]);
            }
        });

        function handleFileSelect(file) {
            if (file.size > 10 * 1024 * 1024) {
                alert('File size must be less than 10MB');
                return;
            }

            const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            if (!allowedTypes.includes(file.type)) {
                alert('Please select a PDF, DOC, or DOCX file');
                return;
            }

            selectedFile = file;
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('fileSize').textContent = (file.size / 1024 / 1024).toFixed(2) + ' MB';
            fileInfo.classList.add('show');

            // Auto-fill title
            const title = file.name.replace(/\.[^/.]+$/, "").replace(/_/g, " ");
            document.getElementById('resumeTitle').value = title;
        }

        function showUploadSuccess() {
            document.getElementById('successMessage').classList.add('show');
            setTimeout(() => {
                document.getElementById('successMessage').classList.remove('show');
            }, 3000);
            return true;
}


        // function uploadResume() {
        //     if (!selectedFile) {
        //         alert('Please select a file first');
        //         return;
        //     }

        //     const title = document.getElementById('resumeTitle').value;
        //     if (!title.trim()) {
        //         alert('Please enter a resume title');
        //         return;
        //     }

        //     // Simulate upload process
        //     const uploadButton = document.querySelector('.btn-primary');
        //     uploadButton.textContent = '⏳ Uploading...';
        //     uploadButton.disabled = true;

        //     setTimeout(() => {
        //         // Update current resume data
        //         currentResumeData = {
        //             name: selectedFile.name,
        //             size: (selectedFile.size / 1024 / 1024).toFixed(2) + ' MB',
        //             uploadDate: new Date().toLocaleDateString('en-US', { 
        //                 year: 'numeric', 
        //                 month: 'short', 
        //                 day: 'numeric' 
        //             }),
        //             title: title,
        //             description: document.getElementById('description').value,
        //             tags: document.getElementById('tags').value
        //         };

        //         displayCurrentResume();
        //         document.getElementById('successMessage').classList.add('show');
        //         uploadButton.textContent = '🚀 Upload Resume';
        //         uploadButton.disabled = false;
                
        //         // Clear form
        //         setTimeout(() => {
        //             clearForm();
        //             document.getElementById('successMessage').classList.remove('show');
        //         }, 3000);
        //     }, 2000);
        // }

        function clearForm() {
            selectedFile = null;
            document.getElementById('fileInput').value = '';
            document.getElementById('resumeTitle').value = '';
            document.getElementById('description').value = '';
            document.getElementById('tags').value = '';
            fileInfo.classList.remove('show');
        }

        function previewResume() {
            alert('Preview functionality would open the resume in a new tab');
        }

        function deleteResume() {
            if (confirm('Are you sure you want to delete the current resume?')) {
                currentResumeData = null;
                document.getElementById('currentResume').style.display = 'none';
                alert('Resume deleted successfully');
            }
        }
    </script>
</body>
</html>