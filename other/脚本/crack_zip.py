#coding: utf-8
import zipfile
import threading

def zipbp(zfile, pwd):
	try:
		zfile.extractall(pwd=pwd)
		print 'password found : %s' % pwd
	except:
		return
def main():
	zfile = zipfile.ZipFile('jingtian.zip')
	pwdall = open('12306_password_top100.txt')
	for pwda in pwdall.readlines():
		pwd = pwda.strip('\n')
		t = threading.Thread(target=zipbp, args=(zfile, pwd))
		t.start()
		t.join()
if __name__ == '__main__':
	main()