# NebulaLaunch - PHP Landing Page

A modern, responsive landing page built with PHP, featuring AI-driven optimization, edge-speed delivery, and privacy-first analytics. This project includes multiple pages, a contact form with server-side validation, and is optimized for deployment on Vercel.

## 🚀 Features

- **Modern Design**: Clean, professional UI with smooth animations and scroll reveals
- **Responsive**: Fully responsive across all devices
- **Contact Form**: Server-side validation with CSRF protection and honeypot spam filtering
- **Multiple Pages**: Home, About, Projects, Resources
- **Privacy-First**: Session-based form handling without invasive tracking
- **SEO Optimized**: Semantic HTML with proper meta tags
- **Accessible**: WCAG compliant with proper ARIA labels
- **Serverless Ready**: Configured for Vercel deployment

## 📁 Project Structure

```
Landing-Page-PHP/
├── api/
│   ├── index.php          # Homepage
│   ├── about.php          # About page
│   ├── projects.php       # Projects showcase
│   ├── resources.php      # Knowledge base
│   ├── contact.php        # Form handler
│   └── assets/            # (symlink to ../assets)
├── assets/
│   ├── css/
│   │   ├── reset.css      # CSS reset
│   │   ├── branding.css   # Brand colors & variables
│   │   ├── base.css       # Main styles
│   │   └── form.css       # Form styles
│   ├── js/
│   │   ├── main.js        # Navigation & scroll effects
│   │   └── validation.js  # Client-side form validation
│   └── img/
│       └── *.svg          # Icon assets
├── vercel.json            # Vercel configuration
├── .vercelignore          # Vercel ignore patterns
└── README.md              # This file
```

## 🛠️ Tech Stack

- **Backend**: PHP 7.4+
- **Frontend**: Vanilla JavaScript (ES6+)
- **Styling**: Custom CSS with CSS Variables
- **Fonts**: Inter & Plus Jakarta Sans (Google Fonts)
- **Deployment**: Vercel (serverless functions)

## 📋 Prerequisites

- PHP 7.4 or higher
- Web server (Apache/Nginx) or PHP built-in server
- Git (for version control)
- Node.js & npm (optional, for Vercel CLI)

## 🚀 Local Development Setup

### Option 1: PHP Built-in Server (Recommended for Quick Setup)

1. **Clone the repository**
   ```bash
   git clone https://github.com/ibrahim3702/Landing-Page-PHP.git
   cd Landing-Page-PHP
   ```

2. **Start the PHP development server**
   ```bash
   cd api
   php -S localhost:8000
   ```

3. **Open in browser**
   ```
   http://localhost:8000
   ```

### Option 2: XAMPP/WAMP (Windows)

1. **Install XAMPP**
   - Download from [https://www.apachefriends.org/](https://www.apachefriends.org/)
   - Install and start Apache

2. **Clone the repository**
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/ibrahim3702/Landing-Page-PHP.git
   ```

3. **Access the site**
   ```
   http://localhost/Landing-Page-PHP/api/
   ```

### Option 3: Docker

1. **Create a `Dockerfile`**
   ```dockerfile
   FROM php:8.1-apache
   COPY . /var/www/html/
   WORKDIR /var/www/html/api
   RUN chown -R www-data:www-data /var/www/html
   ```

2. **Build and run**
   ```bash
   docker build -t nebula-landing .
   docker run -p 8080:80 nebula-landing
   ```

3. **Access the site**
   ```
   http://localhost:8080
   ```

## 🌐 Deployment to Vercel

### Prerequisites
- Vercel account ([https://vercel.com](https://vercel.com))
- GitHub repository

### Method 1: Vercel Dashboard (Recommended)

1. **Push to GitHub**
   ```bash
   git add .
   git commit -m "Initial commit"
   git push origin main
   ```

2. **Import to Vercel**
   - Go to [https://vercel.com/new](https://vercel.com/new)
   - Import your GitHub repository
   - Configure project:
     - **Framework Preset**: Other
     - **Root Directory**: . (leave empty)
     - **Build Command**: (leave empty)
     - **Output Directory**: (leave empty)

3. **Deploy**
   - Click "Deploy"
   - Your site will be live at `https://your-project.vercel.app`

### Method 2: Vercel CLI

1. **Install Vercel CLI**
   ```bash
   npm install -g vercel
   ```

2. **Login to Vercel**
   ```bash
   vercel login
   ```

3. **Deploy**
   ```bash
   vercel
   ```

4. **Production deployment**
   ```bash
   vercel --prod
   ```

## 🔧 Configuration

### PHP Session Configuration

Sessions are configured to work in serverless environments. Messages are logged to `/tmp` on Vercel.

## 📝 Contact Form

The contact form includes:
- **Client-side validation**: Real-time feedback with debouncing
- **Server-side validation**: PHP validation on submission
- **CSRF Protection**: Token-based request verification
- **Honeypot**: Spam bot detection
- **Session-based errors**: Inline error messages

### Form Fields
- Name (2-70 characters)
- Email (valid email format)
- Message (10-1500 characters)


## 👤 Author

**Ibrahim**
- GitHub: [@ibrahim3702](https://github.com/ibrahim3702)
- Repository: [Landing-Page-PHP](https://github.com/ibrahim3702/Landing-Page-PHP)

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request..........