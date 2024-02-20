import os
from PIL import Image
from moviepy.editor import VideoFileClip

def convert_images_to_webp(folder_path):
    for filename in os.listdir(folder_path):
        if filename.endswith((".jpg", ".png")):
            image_path = os.path.join(folder_path, filename)
            img = Image.open(image_path)
            webp_path = os.path.splitext(image_path)[0] + ".webp"
            img.save(webp_path, "WEBP")
            print(f"Imagen convertida a WebP: {webp_path}")

folder_path = "img"
convert_images_to_webp(folder_path)