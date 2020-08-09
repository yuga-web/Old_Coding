seqsample=fastaread('testingdna.txt','ignoregaps',true)
%seqtest=fastaread('testingdna3000bp.fasta','ignoregaps',true)
k=8;
nmer=nmercount(seqsample,k)
for i=1;(n-k+1)
[score, alignment]=nwalign(nmer(i),'AAAAGGGG','scoringmatrix','blosum62','showscore','true')
%[score,alignment]=nwalign('AGTCTCATGC','AGCTC','scoringmatrix','blosum62','showscore','true')

disp(score);
disp(alignment);
end 