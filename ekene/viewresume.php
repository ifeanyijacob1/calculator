<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Portfolio</title>
     <link rel="stylesheet" type="text/css" href="port.css">
     <!-- <link rel="stylesheet" type="text/css" href="dd.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
*/
        .container {
            max-width: 800px;
            margin: 100px auto;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
            height: 700px;
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
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .content {
            padding: 40px;
        }

        .resume-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border: 2px solid #f0f0f0;
        }

        .resume-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .resume-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .resume-info {
            flex: 1;
        }

        .resume-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .resume-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .resume-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .tag {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .resume-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
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
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }

        .file-preview {
            background: #f8f9ff;
            border: 2px dashed #667eea;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .file-preview:hover {
            background: #f0f2ff;
            transform: translateY(-2px);
        }

        .file-icon {
            font-size: 4rem;
            color: #667eea;
            margin-bottom: 15px;
        }

        .file-name {
            font-size: 1.3rem;
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .file-size {
            color: #666;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .preview-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
        }

        .footer {
            
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .footer p {
            color: #666;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            border-color: #667eea;
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }

        .no-resume {
            text-align: center;
            padding: 60px 20px;
            color: #666;
        }

        .no-resume-icon {
            font-size: 5rem;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        .loading {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .loading::after {
            content: '';
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid #667eea;
            border-top: 3px solid transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-left: 10px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .header p {
                font-size: 1rem;
            }

            .content {
                padding: 20px;
            }

            .resume-card {
                padding: 20px;
            }

            .resume-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .resume-actions {
                width: 100%;
                justify-content: center;
            }

            .btn {
                flex: 1;
                justify-content: center;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: white;
            margin: 5% auto;
            padding: 0;
            width: 90%;
            max-width: 800px;
            border-radius: 15px;
            position: relative;
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }

        .close:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .modal-body {
            padding: 20px;
            max-height: 60vh;
            overflow-y: auto;
        }

        .pdf-viewer {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
     <!-- Skip link for screen readers -->
    <!-- <a href="#main" class="skip-link">Skip to content</a> -->

    <!-- Navigation -->
  <!--   <nav class="navbar" id="navbar" aria-label="Main navigation">
        <div class="nav-container">
            <div class="logo">Portfolio</div>
            <ul class="nav-menu" id="nav-menu" role="menu">
                <li role="none"><a href="index.php" class="nav-link active" role="menuitem">Home</a></li>
                <li role="none"><a href="#about" class="nav-link" role="menuitem">About</a></li>
                <li role="none"><a href="#projects" class="nav-link" role="menuitem">Projects</a></li>
                <li role="none"><a href="#values" class="nav-link" role="menuitem">Philosophy</a></li>
                <li role="none"><a href="#contact" class="nav-link" role="menuitem">Contact</a></li>
            </ul>
            <button id="hamburger" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button> -->
        </div>
    </nav>
    <div class="container">
        <div class="header">
            <h1>📄 My Resume</h1>
            <p>Download my latest resume and professional information</p>
        </div>

        <div class="content">
            <!-- Loading State -->
            <div class="loading" id="loadingState">
                Loading resume...
            </div>

            <!-- Resume Content -->
            <div id="resumeContent" style="display: none;">
                <!-- Stats Section -->
             <!--    <div class="stats">
                    <div class="stat-card">
                        <div class="stat-icon">📊</div>
                        <div class="stat-value">5+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">🚀</div>
                        <div class="stat-value">15+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">⭐</div>
                        <div class="stat-value">98%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div> -->
                </div>

                <!-- Resume Card -->
                <div class="resume-card">
                    <div class="resume-header">
                        <div class="resume-info">
                            <h2 class="resume-title">Software Engineer Resume 2025</h2>
                            <div class="resume-meta">
                                📅 Updated: January 15, 2025 | 📄 PDF Format | 💾 1.2 MB
                            </div>
                            <div class="resume-description">
                                Latest resume highlighting my experience in full-stack development, with expertise in React, Node.js, and cloud technologies. This version includes my most recent projects and achievements.
                            </div>
                            <div class="tags">
                                <span class="tag">Frontend</span>
                                <span class="tag">React</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">Node.js</span>
                                <span class="tag">MongoDB</span>
                                <span class="tag">AWS</span>
                            </div>
                        </div>
                        <!-- <div class="resume-actions">
                            <button class="btn btn-primary" onclick="downloadResume()">
                                📥 Download Resume
                            </button>
                            <button class="btn btn-secondary" onclick="previewResume()">
                                👁️ Quick Preview
                            </button>
                        </div>
                    </div> -->

                    <!-- File Preview -->
                    <div class="file-preview" onclick="previewResume()">
                        <div class="file-icon">📋</div>
                        <div class="file-name">Ekene Resume_2025.pdf</div>
                        <div class="file-size">1.2 MB • PDF Document</div>
                        <div class="preview-actions">
                            <button class="btn btn-primary" onclick="downloadResume()">
                                📥 Download Now
                            </button>
                            <button class="btn btn-secondary" onclick="previewResume()">
                                👁️ Preview
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Additional Info -->
               <!--  <div class="resume-card">
                    <h3 style="margin-bottom: 20px; color: #333;">📋 Resume Highlights</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                        <div>
                            <h4 style="color: #667eea; margin-bottom: 10px;">💼 Experience</h4>
                            <ul style="color: #666; line-height: 1.6;">
                                <li>Senior Frontend Developer at TechCorp</li>
                                <li>Full-Stack Developer at StartupXYZ</li>
                                <li>Freelance Web Developer</li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="color: #667eea; margin-bottom: 10px;">🎓 Education</h4>
                            <ul style="color: #666; line-height: 1.6;">
                                <li>B.S. Computer Science</li>
                                <li>AWS Certified Developer</li>
                                <li>React Specialist Certification</li>
                            </ul>
                        </div>
                        <div>
                            <h4 style="color: #667eea; margin-bottom: 10px;">🛠️ Skills</h4>
                            <ul style="color: #666; line-height: 1.6;">
                                <li>React, Vue.js, Angular</li>
                                <li>Node.js, Python, Java</li>
                                <li>AWS, Docker, Kubernetes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
 -->
            <!-- No Resume State -->
            <div class="no-resume" id="noResumeState" style="display: none;">
                <div class="no-resume-icon">📄</div>
                <h2>No Resume Available</h2>
                <p>The resume is currently being updated. Please check back soon!</p>
            </div>
        </div>

        <div class="footer">
            <p>Want to get in touch? Let's connect!</p>
            <div class="social-links">
                <a href="mailto:john@example.com" class="social-link">
                    📧 Email
                </a>
                <a href="https://linkedin.com/in/johndoe" class="social-link">
                    💼 LinkedIn
                </a>
                <a href="https://github.com/johndoe" class="social-link">
                    🐙 GitHub
                </a>
                <a href="https://portfolio.johndoe.com" class="social-link">
                    🌐 Portfolio
                </a>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="previewModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>📄 Resume Preview</h3>
                <button class="close" onclick="closePreview()">&times;</button>
            </div>
            <div class="modal-body">
                <iframe id="pdfViewer" class="pdf-viewer"></iframe>
            </div>
        </div>
    </div>

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
    window.onload = function() {
        fetch('fetch_resume.php')
            .then(response => response.json())
            .then(data => {
                const resumeContent = document.getElementById('resumeContent');
                const noResumeState = document.getElementById('noResumeState');
                const loadingState = document.getElementById('loadingState');
                loadingState.style.display = 'none';

                if (data && !data.error) {
                    resumeContent.style.display = 'block';
                    document.querySelector('.resume-title').textContent = data.title;
                    document.querySelector('.resume-meta').textContent = `📅 Updated: ${data.upload_date} | 📄 PDF Format | 💾 ${data.size}`;
                    document.querySelector('.resume-description').textContent = data.description;
                    document.querySelector('.file-name').textContent = data.filename;
                    document.querySelector('.file-size').textContent = `${data.size} • PDF Document`;

                    // Tags
                    const tags = data.tags.split(',');
                    const tagContainer = document.querySelector('.tags');
                    tagContainer.innerHTML = "";
                    tags.forEach(tag => {
                        const span = document.createElement("span");
                        span.className = "tag";
                        span.textContent = tag.trim();
                        tagContainer.appendChild(span);
                    });

                    // Set preview/download links
                    window.resumeURL = "uploads/" + data.filename;
                } else {
                    noResumeState.style.display = 'block';
                }
            })
            .catch(() => {
                document.getElementById('loadingState').textContent = "❌ Failed to load resume.";
            });
    };

function downloadResume() {
    const link = document.createElement('a');
    link.href = window.resumeURL;
    link.download = window.resumeURL.split('/').pop();
    link.click();
}

// Show PDF Preview in Modal
function previewResume() {
    const pdfViewer = document.getElementById('pdfViewer');
    pdfViewer.src = 'preview_resume.php'; // Stream PDF inline
    document.getElementById('previewModal').style.display = 'block';
}


function closePreview() {
    document.getElementById('previewModal').style.display = 'none';
    document.getElementById('pdfViewer').src = ""; // Clear PDF when closed
}
</script>

</body>
</html>