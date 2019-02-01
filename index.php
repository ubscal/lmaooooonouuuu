while True:
  import requests # requests module of python (can be installed via pip)
  url = str(input("Raw Link: ")) # url of paste
  if "pastebin" in url:
    r = requests.get(url) # response will be stored from url
    content = r.text  # raw text from url
    print(content) # prints content
  else:
    print ('Must be pastebin')
    continue
  
    
