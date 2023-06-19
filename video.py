import argparse
import ffmpeg

# Define the command-line arguments
parser = argparse.ArgumentParser(description='Compress a video file')
parser.add_argument('input_file', help='path to the input video file')
parser.add_argument('output_file', help='path to the output compressed video file')
parser.add_argument('--crf', type=int, default=28, help='Constant Rate Factor (CRF) value for video quality')
parser.add_argument('--preset', default='slow', help='Encoding preset for compression speed and quality')
parser.add_argument('--tune', default='film', help='Video tuning options')

# Parse the command-line arguments
args = parser.parse_args()

# Create the FFmpeg command
ffmpeg_cmd = (
    ffmpeg
    .input(args.input_file)
    .output(args.output_file, crf=args.crf, preset=args.preset, tune=args.tune)
    .overwrite_output()
)

# Run the FFmpeg command
ffmpeg_cmd.run()
