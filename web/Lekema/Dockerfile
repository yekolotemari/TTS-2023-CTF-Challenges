# Use alpine as the base image
FROM alpine:latest

# Install Node.js and npm
RUN apk add --no-cache nodejs npm
RUN mkdir app 
# Set the working directory
WORKDIR /app

# Copy the package.json and package-lock.json files to the working directory
COPY package*.json ./

# Install the dependencies
RUN npm install

# Copy the app files to the working directory
COPY . .

# Expose port 1337
EXPOSE 1337

# Start the app
CMD ["npm", "start"]
