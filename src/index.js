import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")
if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

// Copy invitation code functionality
function copyInvitationCode() {
    const invitationCode = 'PCA2LYZK3';
    
    // Copy to clipboard
    navigator.clipboard.writeText(invitationCode).then(function() {
        // Success feedback
        const button = event.target;
        const originalText = button.innerHTML;
        
        // Change button text temporarily
        button.innerHTML = '✅ Copied! • PCA2LYZK3';
        button.classList.remove('animate-pulse');
        button.classList.add('bg-gradient-to-r', 'from-blue-500', 'to-blue-600');
        
        // Reset after 2 seconds
        setTimeout(function() {
            button.innerHTML = originalText;
            button.classList.add('animate-pulse');
            button.classList.remove('from-blue-500', 'to-blue-600');
            button.classList.add('from-green-500', 'to-emerald-600');
        }, 2000);
        
    }).catch(function(err) {
        // Fallback for older browsers
        console.error('Could not copy text: ', err);
        
        // Create temporary input element
        const tempInput = document.createElement('input');
        tempInput.value = invitationCode;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        // Show success message
        const button = event.target;
        const originalText = button.innerHTML;
        button.innerHTML = '✅ Copied! • PCA2LYZK3';
        
        setTimeout(function() {
            button.innerHTML = originalText;
        }, 2000);
    });
}

// Make function globally available
window.copyInvitationCode = copyInvitationCode;

// Add event listener when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const copyButton = document.getElementById('copy-invitation-btn');
    if (copyButton) {
        copyButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            const invitationCode = copyButton.getAttribute('data-code') || 'PCA2LYZK3';
            
            // Function to show success feedback
            function showCopySuccess() {
                const originalText = copyButton.innerHTML;
                copyButton.innerHTML = '✅ Copied! • ' + invitationCode;
                copyButton.classList.remove('animate-pulse', 'from-green-500', 'to-emerald-600');
                copyButton.classList.add('from-blue-500', 'to-blue-600');
                
                setTimeout(function() {
                    copyButton.innerHTML = originalText;
                    copyButton.classList.add('animate-pulse');
                    copyButton.classList.remove('from-blue-500', 'to-blue-600');
                    copyButton.classList.add('from-green-500', 'to-emerald-600');
                }, 2000);
            }
            
            // Try modern clipboard API first, fallback to older method
            if (navigator.clipboard && window.isSecureContext) {
                // Modern clipboard API
                navigator.clipboard.writeText(invitationCode).then(function() {
                    showCopySuccess();
                }).catch(function(err) {
                    console.error('Clipboard API failed: ', err);
                    // Fallback to execCommand
                    fallbackCopy();
                });
            } else {
                // Use fallback method directly
                fallbackCopy();
            }
            
            function fallbackCopy() {
                try {
                    // Create temporary input element
                    const tempInput = document.createElement('input');
                    tempInput.value = invitationCode;
                    tempInput.style.position = 'fixed';
                    tempInput.style.left = '-999999px';
                    tempInput.style.top = '-999999px';
                    document.body.appendChild(tempInput);
                    tempInput.focus();
                    tempInput.select();
                    
                    const successful = document.execCommand('copy');
                    document.body.removeChild(tempInput);
                    
                    if (successful) {
                        showCopySuccess();
                    } else {
                        console.error('Fallback copy failed');
                        // Show error message
                        const originalText = copyButton.innerHTML;
                        copyButton.innerHTML = '❌ Copy Failed';
                        setTimeout(function() {
                            copyButton.innerHTML = originalText;
                        }, 2000);
                    }
                } catch (err) {
                    console.error('Copy failed: ', err);
                    // Show error message
                    const originalText = copyButton.innerHTML;
                    copyButton.innerHTML = '❌ Copy Failed';
                    setTimeout(function() {
                        copyButton.innerHTML = originalText;
                    }, 2000);
                }
            }
        });
    }
});
