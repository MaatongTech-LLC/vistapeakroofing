@extends('layout')
@section('title', __('Get free quote'))
@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <div style="position:relative;display:inline-block;">
                                {{ __('Get free quote') }}
                            </div>

                        </h1>
                        <nav class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Get free quote') }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Form Start -->
    <div class="contact-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <!-- Contact Form Image Start -->
                    <div class="contact-form-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/company-skill-image.jpg') }}" alt="" style="transform: translate(0px, 0px);">
                        </figure>
                    </div>
                    <!-- Contact Form Image End -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Request Quote</h3>
                            <h2 class="text-anime-style-3">Get in touch with us</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Progress Bar -->
                        <div class="progress-bar-container">
                            <div class="progress-bar">
                                <div class="progress-bar-fill" id="progressBar"></div>
                            </div>
                            <div class="step-indicators">
                                <span class="step-indicator active" data-step="1">Contact Info</span>
                                <span class="step-indicator" data-step="2">Service Details</span>
                                <span class="step-indicator" data-step="3">Project Description</span>
                                <span class="step-indicator" data-step="4">Review & Submit</span>
                            </div>
                        </div>

                        <!-- Multi-step Form Start -->
                        <form id="quoteForm" action="{{ route('quotes.store') }}" method="POST" enctype="multipart/form-data" class="wow fadeInUp" data-wow-delay="0.25s" novalidate>
                            @csrf
                            <!-- Step 1: Contact Information -->
                            <div class="form-section active" id="step-1">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="customer_name">Full Name *</label>
                                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="John Doe" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="customer_email">Email Address *</label>
                                        <input type="email" name="customer_email" class="form-control" id="customer_email" placeholder="john@example.com" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="customer_phone">Phone Number *</label>
                                        <input type="tel" name="customer_phone" class="form-control" id="customer_phone" placeholder="(555) 123-4567" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="customer_address">Property Address *</label>
                                        <textarea name="customer_address" class="form-control" id="customer_address" rows="3" placeholder="123 Main St, City, State, ZIP" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Service Details -->
                            <div class="form-section" id="step-2">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="service_type">Service Type *</label>
                                        <select name="service_type" class="form-control" id="service_type" required>
                                            <option value="">Select Service</option>
                                            <option value="roof_repair">Roof Repair</option>
                                            <option value="roof_replacement">Roof Replacement</option>
                                            <option value="roof_installation">New Roof Installation</option>
                                            <option value="roof_inspection">Roof Inspection</option>
                                            <option value="gutter_services">Gutter Services</option>
                                            <option value="emergency_repair">Emergency Repair</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="roof_type">Current Roof Type</label>
                                        <select name="roof_type" class="form-control" id="roof_type">
                                            <option value="">Select Roof Type</option>
                                            <option value="asphalt_shingles">Asphalt Shingles</option>
                                            <option value="metal">Metal Roofing</option>
                                            <option value="tile">Tile Roofing</option>
                                            <option value="slate">Slate Roofing</option>
                                            <option value="flat">Flat Roofing</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="estimated_area">Estimated Roof Area (sq ft)</label>
                                        <input type="number" name="estimated_area" class="form-control" id="estimated_area" placeholder="1200" min="0" step="0.01">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="preferred_start_date">Preferred Start Date</label>
                                        <input type="date" name="preferred_start_date" class="form-control" id="preferred_start_date">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Priority Level *</label>
                                        <div class="priority-grid">
                                            <div class="priority-option">
                                                <input type="radio" name="priority" value="low" id="priority_low" required>
                                                <label for="priority_low">Low</label>
                                            </div>
                                            <div class="priority-option">
                                                <input type="radio" name="priority" value="medium" id="priority_medium" required checked>
                                                <label for="priority_medium">Medium</label>
                                            </div>
                                            <div class="priority-option">
                                                <input type="radio" name="priority" value="high" id="priority_high" required>
                                                <label for="priority_high">High</label>
                                            </div>
                                            <div class="priority-option">
                                                <input type="radio" name="priority" value="urgent" id="priority_urgent" required>
                                                <label for="priority_urgent">Urgent</label>
                                            </div>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Project Description -->
                            <div class="form-section" id="step-3">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <label for="description">Project Description *</label>
                                        <textarea name="description" class="form-control" id="description" rows="5" placeholder="Please describe your roofing project in detail, including any issues, damages, or specific requirements..." required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label for="special_requirements">Special Requirements</label>
                                        <textarea name="special_requirements" class="form-control" id="special_requirements" rows="3" placeholder="Any special requirements, materials preferences, or constraints..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Upload Photos/Documents</label>
                                        <div class="file-upload-area" onclick="document.getElementById('file-upload').click()">
                                            <svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"/>
                                            </svg>
                                            <p><strong style="color: var(--accent-color);">Click to upload</strong> or drag and drop</p>
                                            <p style="font-size: 12px; color: var(--text-color);">PNG, JPG, PDF up to 10MB each</p>
                                        </div>
                                        <input type="file" name="attachments[]" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" id="file-upload" style="display: none;">
                                        <div id="file-list" class="file-list"></div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4: Review & Submit -->
                            <div class="form-section" id="step-4">
                                <div class="review-section">
                                    <h4 style="margin-bottom: 20px; color: var(--primary-color);">Review Your Request</h4>
                                    <div id="review-content">
                                        <!-- Dynamic review content will be inserted here -->
                                    </div>
                                </div>
                                <div class="info-box">
                                    <h4>What happens next?</h4>
                                    <p>We'll review your request and contact you within 24 hours to discuss your project and schedule a consultation.</p>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="contact-form-btn">
                                <button type="button" id="prev-btn" class="btn-secondary" style="display: none;">Previous</button>
                                <button type="button" id="next-btn" class="btn-default">Next</button>
                                <button type="submit" id="submit-btn" class="btn-default" style="display: none;">Submit Quote Request</button>
                            </div>
                        </form>
                        <!-- Multi-step Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->


@endsection

@push('styles')
    <style>
        .btn-default::before {
            display: none;
        }

        .btn-default:hover {
            background-color: transparent;
            color: white !important;
        }
        .container{
            max-width: 1300px;
        }

        /* Contact Form Styles */
        .contact-form {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .contact-form-img figure {
            margin: 0;
        }

        .contact-form-img img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .contact-form-content {
            padding-left: 40px;
        }

        .section-title h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--accent-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .section-title h2 {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        /* Multi-step form styles */
        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeInUp 0.5s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 500;
            color: var(--primary-color);
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid var(--divider-color);
            border-radius: 5px;
            font-size: 16px;
            color: var(--primary-color);
            background-color: var(--white-color);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(234, 0, 0, 0.1);
        }

        .form-control::placeholder {
            color: var(--text-color);
            opacity: 0.7;
        }

        /* Priority radio buttons */
        .priority-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .priority-option {
            position: relative;
        }

        .priority-option input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .priority-option label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 15px;
            border: 2px solid var(--divider-color);
            border-radius: 5px;
            background-color: var(--white-color);
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            text-align: center;
        }

        .priority-option input[type="radio"]:checked + label {
            border-color: var(--accent-color);
            background-color: rgba(234, 0, 0, 0.1);
            color: var(--accent-color);
        }

        .priority-option label:hover {
            border-color: var(--accent-color);
            background-color: rgba(234, 0, 0, 0.05);
        }

        /* File upload */
        .file-upload-area {
            border: 2px dashed var(--divider-color);
            border-radius: 5px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-area:hover {
            border-color: var(--accent-color);
            background-color: rgba(234, 0, 0, 0.02);
        }

        .file-upload-area svg {
            width: 48px;
            height: 48px;
            color: var(--text-color);
            margin-bottom: 15px;
        }

        .file-list {
            margin-top: 15px;
        }

        .file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .file-item span {
            font-size: 14px;
            color: var(--primary-color);
        }

        .file-item button {
            background: none;
            border: none;
            color: var(--accent-color);
            cursor: pointer;
            font-size: 18px;
        }

        /* Navigation buttons */
        .contact-form-btn {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-default {
            background-color: var(--accent-color);
            color: var(--white-color);
            border: 2px solid var(--accent-color);
            padding: 15px 35px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-default:hover {
            background-color: transparent;
            color: var(--accent-color);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--text-color);
            border: 2px solid var(--divider-color);
            padding: 15px 35px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-secondary:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        /* Progress bar */
        .progress-bar-container {
            margin-bottom: 40px;
        }

        .progress-bar {
            width: 100%;
            height: 4px;
            background-color: var(--divider-color);
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: var(--accent-color);
            width: 25%;
            transition: width 0.5s ease;
        }

        .step-indicators {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .step-indicator {
            font-size: 14px;
            font-weight: 500;
            color: var(--text-color);
        }

        .step-indicator.active {
            color: var(--accent-color);
        }

        /* Review section */
        .review-section {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .review-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--divider-color);
        }

        .review-item:last-child {
            border-bottom: none;
        }

        .review-label {
            font-weight: 600;
            color: var(--primary-color);
        }

        .review-value {
            color: var(--text-color);
        }

        .info-box {
            background-color: rgba(234, 0, 0, 0.05);
            border: 1px solid rgba(234, 0, 0, 0.2);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .info-box h4 {
            color: var(--accent-color);
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .info-box p {
            color: var(--primary-color);
            margin-bottom: 0;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .contact-form-content {
                padding-left: 0;
                margin-top: 40px;
            }

            .section-title h2 {
                font-size: 36px;
            }

            .priority-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        let currentStep = 1;
        const totalSteps = 4;

        // Initialize form
        document.addEventListener('DOMContentLoaded', function() {
            updateProgressBar();
            updateStepIndicators();
        });

        // Next button functionality
        document.getElementById('next-btn').addEventListener('click', function() {
            if (validateCurrentStep()) {
                if (currentStep < totalSteps) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        });

        // Previous button functionality
        document.getElementById('prev-btn').addEventListener('click', function() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Form submission
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            if (validateCurrentStep()) {
                e.target.submit();
            }
        });

        // File upload functionality
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const fileList = document.getElementById('file-list');
            fileList.innerHTML = '';

            Array.from(e.target.files).forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'file-item';
                fileItem.innerHTML = `
                    <span>${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
                    <button type="button" onclick="removeFile(${index})">&times;</button>
                `;
                fileList.appendChild(fileItem);
            });
        });

        function removeFile(index) {
            const fileInput = document.getElementById('file-upload');
            const dt = new DataTransfer();
            const files = fileInput.files;

            for (let i = 0; i < files.length; i++) {
                if (i !== index) {
                    dt.items.add(files[i]);
                }
            }

            fileInput.files = dt.files;
            fileInput.dispatchEvent(new Event('change', { bubbles: true }));
        }

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });

            // Show current step
            document.getElementById(`step-${step}`).classList.add('active');

            // Update navigation buttons
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');

            prevBtn.style.display = step > 1 ? 'block' : 'none';

            if (step === totalSteps) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'block';
                populateReview();
            } else {
                nextBtn.style.display = 'block';
                submitBtn.style.display = 'none';
            }

            updateProgressBar();
            updateStepIndicators();
        }

        function updateProgressBar() {
            const progressBar = document.getElementById('progressBar');
            const progressPercentage = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${progressPercentage}%`;
        }

        function updateStepIndicators() {
            document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
                if (index + 1 <= currentStep) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        function validateCurrentStep() {
            const currentSection = document.getElementById(`step-${currentStep}`);
            const requiredFields = currentSection.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                const errorDiv = field.parentElement.querySelector('.help-block.with-errors');

                if (errorDiv) errorDiv.innerHTML = '';

                if (!field.value.trim()) {
                    isValid = false;
                    errorDiv.innerHTML = '<span style="color: var(--error-color); font-size: 12px;">This field is required</span>';
                    field.style.borderColor = 'var(--error-color)';
                } else {
                    field.style.borderColor = 'var(--divider-color)';

                    // Email validation
                    if (field.type === 'email' && !isValidEmail(field.value)) {
                        isValid = false;
                        errorDiv.innerHTML = '<span style="color: var(--error-color); font-size: 12px;">Please enter a valid email address</span>';
                        field.style.borderColor = 'var(--error-color)';
                    }
                }
            });

            return isValid;
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isInArray(value, array) {
            return array.includes(value);
        }

        function populateReview() {
            const reviewContent = document.getElementById('review-content');
            const formData = new FormData(document.getElementById('quoteForm'));

            const reviewItems = [
                { label: 'Full Name', value: formData.get('customer_name') },
                { label: 'Email', value: formData.get('customer_email') },
                { label: 'Phone', value: formData.get('customer_phone') },
                { label: 'Property Address', value: formData.get('customer_address') },
                { label: 'Service Type', value: getSelectText('service_type') },
                { label: 'Roof Type', value: getSelectText('roof_type') || 'Not specified' },
                { label: 'Estimated Area', value: formData.get('estimated_area') ? formData.get('estimated_area') + ' sq ft' : 'Not specified' },
                { label: 'Preferred Start Date', value: formData.get('preferred_start_date') || 'Not specified' },
                { label: 'Priority', value: formData.get('priority') },
                { label: 'Project Description', value: formData.get('description') },
                { label: 'Special Requirements', value: formData.get('special_requirements') || 'None specified' }
            ];

            reviewContent.innerHTML = reviewItems.map(item => `
                <div class="review-item">
                    <span class="review-label">${item.label}:</span>
                    <span class="review-value">${item.value}</span>
                </div>
            `).join('');

            // Add file information if any
            const fileInput = document.getElementById('file-upload');
            if (fileInput.files.length > 0) {
                const fileNames = Array.from(fileInput.files).map(file => file.name).join(', ');
                reviewContent.innerHTML += `
                    <div class="review-item">
                        <span class="review-label">Uploaded Files:</span>
                        <span class="review-value">${fileNames}</span>
                    </div>
                `;
            }
        }

        function getSelectText(selectId) {
            const select = document.getElementById(selectId);
            return select.selectedOptions[0] ? select.selectedOptions[0].text : '';
        }
    </script>
@endpush
