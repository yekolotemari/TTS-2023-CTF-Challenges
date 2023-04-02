def encrypt_message(message):
    encrypted_words = []
    for word in message.split():
        # Convert letters to ASCII values and add 1 to the first letter
        ascii_vals = [ord(word[0]) + 1]
        for i in range(1, len(word)):
            # Add the ASCII value of the previous letter to the current letter
            ascii_val = ord(word[i]) + ascii_vals[i-1]
            # Subtract 26 until the ASCII value is in the range of lowercase letters a-z
            while ascii_val > ord('z'):
                ascii_val -= 26
            ascii_vals.append(ascii_val)
        # Convert the ASCII values back to letters
        encrypted_word = ''.join(chr(val) for val in ascii_vals)
        encrypted_words.append(encrypted_word)
    # Combine the encrypted words into a single string
    encrypted_message = ' '.join(encrypted_words)
    return encrypted_message

message = "iknowyoucandoit" # this string is for test 
encrypted_message = encrypt_message(message)
print(encrypted_message)




# decrypt this secret string and wrap it in flag{*}
secret = "jmszofmzuntpwxj"

def decrypt(secret):
    #implement you function decrypt
    pass
