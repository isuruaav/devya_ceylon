# DEVYA CEYLON Premium Multi-page Website

## Pages
- `index.php` — Home
- `about-us.php` — Executive Summary, Background, Vision, Mission and Objectives
- `services.php` — Clinical, specialist, wellness and supportive services
- `facilities.php` — Infrastructure and human resources
- `appointments.php` — WhatsApp appointment request form
- `contact.php` — Contact options and FAQ

## Project structure

```text
devya-ceylon-premium/
├── index.php
├── about-us.php
├── services.php
├── facilities.php
├── appointments.php
├── contact.php
├── includes/
│   ├── site-config.php
│   ├── header.php
│   └── footer.php
└── assets/
    ├── css/site.css
    ├── js/site.js
    └── images/devya-logo.svg
```

## Setup
1. Copy the complete folder into WAMP `www` or your hosting `public_html` directory.
2. Open `includes/site-config.php` and update the phone/WhatsApp details when required.
3. Open the project through PHP, for example:
   - `http://localhost/devya-ceylon-premium/`
4. Internet access is required for Google Fonts, Font Awesome and the remote Pexels images.

## Appointment form
The appointment form creates a formatted WhatsApp message. It does not store information in a database and does not automatically confirm appointments.

## Production notes
- Replace remote images with optimized local WebP files for maximum speed.
- Connect the appointment form to your Laravel/HMS API when the backend is ready.
- Add the real domain, address, email and social links when confirmed.


## Centre location
The configured public location is **Kandy, Sri Lanka**. Update the exact street address later in `includes/site-config.php` when it is confirmed.


## Custom website images
Use `IMAGE-GENERATION-GUIDE.md` for recommended sections, filenames, image sizes and generation prompts.
