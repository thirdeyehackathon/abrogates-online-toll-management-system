try:
    import Image
	#import cv2
except ImportError:
    from PIL import Image
import pytesseract

img = Image.open('test.png')
img.load()
#cv2.imshow('image',img)
#print img
i = pytesseract.image_to_string(img)
print i