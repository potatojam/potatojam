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
- `css/home.css` - Responsive homepage design (independent of the legacy page styles)
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

## Homepage assets

The homepage uses the original game artwork and a text-free Bring Me Cakes hero from the supplied `RedHood/Promo/BmC_PressKit/promo_wide.png`, exported to `img/home-hero.jpg` as a JPEG.

Travel Merge uses a landscape promotional composition in `img/TravelMerge_Splash.jpg`, created with built-in ImageGen from the supplied gameplay screenshot, the existing `TravelMerge/logo1.psd` logo, and the Merge Summer cover as a layout reference, with a warm-white glow behind the logo. This is composed promotional artwork rather than an unedited gameplay capture.

Color Merge Lines uses the supplied `MergeLines/Icons/icon1_628.png` and `MergeLines/Export/splash.png`, stored as `img/ColorMergeLines.jpg` and `img/ColorMergeLines_Logo.png`. Its desktop cover pairs the original artwork and logo; compact mobile cards use the numbered-dot artwork alone.

At viewport widths up to 600 px, every game card uses a square icon from `img/icons/` through a responsive `<picture>` source. These are 384 × 384 px WebP exports; larger viewports retain the landscape covers. Bring Me Cakes also uses the compact mobile layout, and store badges keep their full size.

Icon sources below are relative to the supplied `Nextcloud/PotatoJam` artwork folder, except the published 1010 Color Match icon, which was not found there:

| Icon | Source |
| --- | --- |
| Travel Merge | `TravelMerge/Icons/AB3_game_icon_v2.png` |
| Merge Summer | `Merge Summer/Icon/icon_7_628.png` (regular ice cream, without a seasonal theme) |
| King of Mahjong | `OnetGems/Icons/iсon10_2.png` |
| Market Sort | `Sort/Icons/iсon3.png` |
| Bring Me Cakes | `RedHood/Work_Icon/icon7.png` |
| Onet Master | `OnetGems/Icons/iсon6_update_628.png` |
| 1010 Color Match | [Original icon from its Poki page](https://img.poki-cdn.com/dd44a203a7d758226e290304fdbcd82d/1010-color-match-logo.png) |
| Domino Merge! | `DominoMerge/Icons/iсon1_628.png` |
| Classic Solitaire Klondike | `Cards/UPDATE/icons/icon1.png` |
| Color Merge Lines | `MergeLines/Icons/icon1_628.png` |
| Onet Paradise | `OnetParadise/Paradise_Icon_6_new.png` |
| Monster Duo | `Onet_Collectable/Icon/icon_5_628.png` |

Store badge source files are stored locally in `img/badges/`. Logos and lettering retain their original colors and proportions:

- `poki-light.svg`: the supplied light Poki badge from the `Badge` asset folder.
- `app-store.svg`: [Apple's official black App Store badge](https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg).
- `google-play.svg`: the English digital SVG from [Google's Partner Marketing Hub](https://partnermarketinghub.withgoogle.com/brands/google-play/google-play/lockups-icons-badges/#badges), downloaded on October 17, 2026.

All badges have a 136 × 40 px visible frame with 10 px of clear space on every side. App Store and Google Play use matching black CSS frames, with only their original border edges clipped so the artwork is not stretched. The App Store badge comes first where available. Badges wrap on smaller screens instead of shrinking. Source guidelines: [Apple's badge guidelines](https://developer.apple.com/app-store/marketing/guidelines/) and the Google guidelines linked above; the uniform framing is a site-specific presentation adjustment.

To preview the site locally, run `python3 -m http.server 4173 --bind 127.0.0.1` in the repository root and open `http://127.0.0.1:4173/`.

Temporary mockups, generated working images, and preview screenshots belong in the ignored `output/` directory; only the final assets used by the site are committed.

## Contact

For support inquiries: support@potatojam.com
