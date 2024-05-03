#include<stdio.h>
#include <math.h>
int main(){
	int n;
	printf("nhap so luong mang: ");
	scanf("%d",&n);
	int tong=0;
	int arr[n];
	for(int i=0;i<n;i++){
		printf("arr[%d] = ",i);
		scanf("%d",&arr[i]); 
	}
	printf( "%d",tong);
	for(int r=0;r<n;r++){
		for(int j=2;j<arr[r];j++){
			if(arr[r] % j ==0 ){
				break; 
			}
			else{
				tong =tong +arr[r];
			} 
		}
	}
	printf( "\n tong:  %d",tong);
	return 0;
}
