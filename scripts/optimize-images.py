#!/usr/bin/env python3
"""Rebuild the homepage's responsive WebP assets with ImageMagick 7."""

from pathlib import Path
import shutil
import subprocess


ROOT = Path(__file__).resolve().parents[1]
IMAGES = ROOT / "img"
DESTINATION = IMAGES / "optimized"
COVERS = {
    "travel-merge": "TravelMerge_Splash.jpg",
    "merge-summer": "MergeSummer_Splash.jpg",
    "king-of-mahjong": "OnetKing_Splash.jpg",
    "market-sort": "Sort_Splash.jpg",
    "bring-me-cakes": "bmc.jpg",
    "onet-master": "OnetMaster_Splash.jpg",
    "1010-color-match": "1010_Splash.jpg",
    "domino-merge": "Dice_Splash.jpg",
    "solitaire-klondike": "csk.jpg",
    "onet-paradise": "onetp.jpg",
    "monster-duo": "onetm.jpg",
}


def export(source, name, widths, *, cover=False, lossless=False, quality=80):
    for width in widths:
        destination = DESTINATION / f"{name}-{width}.webp"
        command = ["magick", str(source), "-colorspace", "sRGB"]
        if cover:
            # Match the desktop card's existing centered 16:9 crop.
            size = f"{width}x{width * 9 // 16}"
            command += ["-resize", size + "^", "-gravity", "center", "-extent", size]
        else:
            command += ["-resize", f"{width}x"]
        command += ["-strip", "-define", "webp:method=6"]
        if lossless:
            command += ["-define", "webp:lossless=true"]
        command += ["-quality", str(quality), str(destination)]
        subprocess.run(command, check=True)


def main():
    if not shutil.which("magick"):
        raise SystemExit("Install ImageMagick 7 before rebuilding the image assets.")
    DESTINATION.mkdir(exist_ok=True)
    export(IMAGES / "home-hero.jpg", "home-hero", [480, 800, 1280, 1920])
    for name, filename in COVERS.items():
        export(IMAGES / filename, name, [320, 480, 800, 1200], cover=True)
    for source in sorted((IMAGES / "icons").glob("*.webp")):
        export(source, "icon-" + source.stem, [128, 240, 384], quality=82)
    export(IMAGES / "logo.png", "logo", [150, 300, 450], lossless=True)
    export(IMAGES / "Cool.png", "studio-mascot", [144, 216, 324])
    export(IMAGES / "mdefold.png", "made-with-defold", [96, 144, 216], lossless=True)
    export(IMAGES / "apple-touch-icon.png", "potato", [64], lossless=True)
    export(IMAGES / "ColorMergeLines_Logo.png", "color-merge-lines-logo", [180, 360, 490], quality=85)
    images = list(DESTINATION.glob("*.webp"))
    print(f"Generated {len(images)} images ({sum(p.stat().st_size for p in images):,} bytes).")


if __name__ == "__main__":
    main()
