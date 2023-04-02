def decrypt(word):
    secondStep = 1
    decryption = ""

    for i in range(len(word)):
        newLetterAscii = ord(word[i])
        newLetterAscii = newLetterAscii - secondStep
        print(newLetterAscii, end="  ")
        print()
        while (newLetterAscii < ord('a')):
            newLetterAscii += 26
        print(newLetterAscii, end='  ') 
        decryption = decryption + chr(newLetterAscii)
        secondStep += newLetterAscii

    return decryption

print(decrypt("jmszofmzuntpwxj"))
