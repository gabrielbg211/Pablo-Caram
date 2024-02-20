import os

from PIL import Image
from moviepy.editor import VideoFileClip

def convert_videos_to_webm(folder_path):
    for filename in os.listdir(folder_path):
        if filename.endswith((".mp4", ".avi", "mov")):
            video_path = os.path.join(folder_path, filename)
            clip = VideoFileClip(video_path)
            webm_path = os.path.splitext(video_path)[0] + ".webm"
            clip.write_videofile(webm_path, codec="libvpx-vp9", bitrate="5000k")
            print(f"Video convertido a WebM: {webm_path}")


folder_path = "video"
convert_videos_to_webm(folder_path)


