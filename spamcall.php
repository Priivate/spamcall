Coded by Akmal Fauzan
import os,requests
s=requests.Session()

headers={
'User-Agent':'Mozilla/5.0 (Linux; Android 8.0.0; TA-1053 Build/OPR1.170623.026) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3368.0 Mobile Safari/537.36',
'Referer':'http://kingtools.id/'}
url='http://kingtools.id/tokcall/index.php'

m='\033[1;91m' #merah
p='\033[1;97m' #putih
h='\033[1;92m' #hijau

os.system('clear')
print(p+'=====> Spam call <=====\n    '+m+'Coded by DulLah')
print(p+'\n[!] Ex: 628xxxxx')
send='kirim'
form={
'nomor':input('[*] Nomor target > '),
'kirim':send
}
z=s.post(url,data=form,headers=headers).text
if 'Sukses' in z:
	print(h+'\n    * Berhasil terkirim *')
else:
	print(m+'\n    * Gagal terkirim *')
