#include <stdio.h>
#include <stdbool.h>

int main() {
	int arr[] = {2,8,9,5,7};
	int size = sizeof(arr) / sizeof(arr[0]);
	int sum;
	for (int i = 0; i < size; i++) {
		if (arr[i] <= 1) {
			return false;
		}
		for (int i = 0; i*i <= arr[i]; i++) {
			if (arr[i] % i == 0) {
				return false;
			}
		}
		sum += arr[i];
	}
}
