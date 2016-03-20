from PIL import Image
import pytesseract
i=Image.open("plate.jpg")
print pytesseract.image_to_string(i)
#print i

