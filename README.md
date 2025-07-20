# Potato Jam Website

Static website for Potato Jam mobile and web game studio, featuring our game portfolio and company information.

## GitHub Pages Deployment

This site is configured to work with GitHub Pages. Follow these steps to deploy:

### 1. Repository Settings
1. Go to your repository on GitHub
2. Click on **Settings** tab
3. Scroll down to **Pages** section in the left sidebar
4. Under **Source**, select **Deploy from a branch**
5. Choose your branch (currently on `site` branch)
6. Select **/ (root)** as the folder
7. Click **Save**

### 2. Custom Domain (Optional)
If you want to use a custom domain:
1. In the Pages settings, add your domain in the **Custom domain** field
2. Create a `CNAME` file in your repository root with your domain name

### 3. Access Your Site
- Your site will be available at: `https://[username].github.io/[repository-name]`
- Or at your custom domain if configured

## Site Structure

- `index.html` - Homepage with game portfolio
- `policy.html` - Privacy policy
- `eula.html` - End User License Agreement  
- `accounts.html` - Account deletion request form
- `css/` - Stylesheets
- `img/` - Images and game screenshots
- `fonts/` - Custom fonts

## Features

- Responsive design for mobile and desktop
- Game portfolio with links to app stores and web versions
- Static contact forms using mailto links
- SEO optimized with meta tags
- Google Analytics integration

## Technical Notes

- Converted from PHP to static HTML for GitHub Pages compatibility
- Account deletion form now uses mailto links instead of server-side email processing
- All assets are self-hosted (fonts, images, CSS)
- Uses semantic HTML and accessible design patterns

## Contact

For support inquiries: support@potatojam.com 