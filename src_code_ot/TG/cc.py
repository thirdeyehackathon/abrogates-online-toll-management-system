#try:
 #     import Image
 #except ImportError:
 #     from PIL import Image
#import pytesseract
#print(pytesseract.image_to_string(Image.open('test.png')))
#print(pytesseract.image_to_string(Image.open('test-european.jpg'), lang='fra'))
import Image
from newpyt import image_to_string
print image_to_string(Image.open('test.png'))
print image_to_string(Image.open('test-european.jpg'), lang='fra')